<?php session_start();
if (is_null($_SESSION['login'])) {
    header('Location: ../login.php');
}
include '../connection.php';
$korisnik = $_SESSION['login'];
$ar = explode('#', $korisnik, 4);
$ar[1] = rtrim($ar[1], '#');
$idKorisnika = $ar[0];
$dataBaseName = $ar[3];
$conn = OpenStoreCon($dataBaseName);
mysqli_set_charset($conn, 'utf8');

$stavka = mysqli_real_escape_string($conn, $_REQUEST['stavka']);
$ar = explode("#", $stavka, 3);
$ar[1] = rtrim($ar[1], "#");
$oznaka = $ar[0];
$kolicina = $ar[1];
$idPolja = $ar[2];

$stmt = "";
switch ($oznaka) {
    case 1:
        $stmt = $conn->prepare('SELECT * FROM `1.50_cr39_uc_hmc` WHERE IDPolja =?');
        break;
    case 2:
        $stmt = $conn->prepare('SELECT * FROM `1.56_shmc_uv420_ab` WHERE IDPolja =?');
        break;
    case 3:
        $stmt = $conn->prepare('SELECT * FROM `1.60_transition_hmc` WHERE IDPolja =?');
        break;
    case 4:
        $stmt = $conn->prepare('SELECT * FROM `1.56_photocromic_hmc` WHERE IDPolja =?');
        break;
    case 5:
        $stmt = $conn->prepare('SELECT * FROM `1.59_polycarbonate_hmc` WHERE IDPolja =?');
        break;
    case 6:
        $stmt = $conn->prepare('SELECT * FROM `1.50_transition_hmc` WHERE IDPolja =?');
        break;
    case 7:
        $stmt = $conn->prepare('SELECT * FROM `1.53_trivex_hmc` WHERE IDPolja =?');
        break;
    case 8:
        $stmt = $conn->prepare('SELECT * FROM `1.60_hmc` WHERE IDPolja =?');
        break;
    case 9:
        $stmt = $conn->prepare('SELECT * FROM `1.60_uv420_ab` WHERE IDPolja =?');
        break;
    case 10:
        $stmt = $conn->prepare('SELECT * FROM `1.67_hmc_uv420_ab` WHERE IDPolja =?');
        break;
    case 11:
        $stmt = $conn->prepare('SELECT * FROM `1.74_ahmc` WHERE IDPolja =?');
        break;
    case 12:
        $stmt = $conn->prepare('SELECT * FROM `1.50_solea_hc_solea_ultra_backside` WHERE IDPolja =?');
        break;
}
$stmt->bind_param('i', $idPolja);
$stmt->execute();
$result = $stmt->get_result();
if (!$result) die(mysqli_error($conn));
$vrsta_materijala = '';
while ($row = mysqli_fetch_object($result)) {
    $sifra = $row->sifra;
    $vrsta_materijala = $row->naziv;
}

$stmt1 = $conn->prepare('SELECT ID,kolicina FROM narudzbenica_pol WHERE IDKorisnika =? AND lag_spec ="Lager" AND vrsta_materijala =?');
$stmt1->bind_param('is', $idKorisnika, $vrsta_materijala);
$stmt1->execute();
$result = $stmt1->get_result();

$count = 0;
while ($row = mysqli_fetch_object($result)) {
    $count = 1;
    $ID = $row->ID;
    $stara_kolicina = $row->kolicina;
}

if ($count == 1) {
    $stmt2 = $conn->prepare('UPDATE narudzbenica_pol SET kolicina =? WHERE ID =?');
    $ukupna_kolicina = $stara_kolicina + $kolicina;
    $stmt2->bind_param('ii', $ukupna_kolicina, $ID);
    $stmt2->execute();
} else {
    $stmt = $conn->prepare('INSERT INTO narudzbenica_pol (IDKorisnika,lag_spec,vrsta_materijala,kolicina) VALUES (?, "Lager", ?, ?)');
    $stmt->bind_param('isi', $idKorisnika, $vrsta_materijala, $kolicina);
    $stmt->execute();
}

if (mysqli_error($conn)) {
    die(mysqli_error($conn));
}
//header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=2');
CloseCon($conn);
