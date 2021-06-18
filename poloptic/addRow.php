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

//Ovu skriptu koriste sve stranice koje sadrže grafikone
//Vrijednosti koje se prosleđuju ovoj skripti su ID stranice, ID polja i količina
//Na osnovu ID stranice se izvršava jedan od upita
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
        $stmt = $conn->prepare('SELECT * FROM `1.50_transition_hmc_brown` WHERE IDPolja =?');
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
        $stmt = $conn->prepare('SELECT * FROM `1.50_solea_hc_solea_ultra_backside_brown` WHERE IDPolja =?');
        break;
    case 13:
        $stmt = $conn->prepare('SELECT * FROM `1.50_bluetech` WHERE IDPolja =?');
        break;
    case 14:
        $stmt = $conn->prepare('SELECT * FROM `1.50_solea_hc_solea_ultra_backside_gray` WHERE IDPolja =?');
        break;
    case 15:
        $stmt = $conn->prepare('SELECT * FROM `1.50_transition_hmc_gray` WHERE IDPolja =?');
        break;
    case 16:
        $stmt = $conn->prepare('SELECT * FROM `1.50_ultratech` WHERE IDPolja =?');
        break;
}

//ID polja u grafikonu koji se proslijedi, se provjera u tabeli i na osnovu toga dobijamo naziv tj izabranu dioptriju
$stmt->bind_param('i', $idPolja);
$stmt->execute();
$result = $stmt->get_result();
if (!$result) die(mysqli_error($conn));
$vrsta_materijala = '';
while ($row = mysqli_fetch_object($result)) {
    $sifra = $row->sifra;
    $vrsta_materijala = $row->naziv;
}

//Ukoliko se nekoliko puta unese ista dioptrija, ne kreira se novi zapis već se postojećem ažurira količina
//Prvo se provjerava da li već postoji zapis u tabeli koji ima istu "vrstu materijala"
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

//Ažuriranje količine (sabiranje stare i nove unesene količine)
if ($count == 1) {
    $stmt2 = $conn->prepare('UPDATE narudzbenica_pol SET kolicina =? WHERE ID =?');
    $ukupna_kolicina = $stara_kolicina + $kolicina;
    $stmt2->bind_param('ii', $ukupna_kolicina, $ID);
    $stmt2->execute();
} else {

    //Za svaki red u tabeli se automatski popunjava i mjesto isporuke koje je već predifinisano za korisnika koji je ulogovan.
    $con = OpenCon();
    mysqli_set_charset($con, 'utf8');
    $stmt3 = $con->prepare('SELECT alias FROM korisnici WHERE ID=?');
    $stmt3->bind_param('i', $idKorisnika);
    $stmt3->execute();
    $result3 = $stmt3->get_result();
    $mjesto_isporuke = "";
    while ($row3 = mysqli_fetch_object($result3)) {
        $mjesto_isporuke = $row3->alias;
    }

    //Dodavanje zapisa u tabelu
    $stmt = $conn->prepare('INSERT INTO narudzbenica_pol (IDKorisnika,lag_spec,vrsta_materijala,jm,kolicina,mjesto_isporuke) VALUES (?, "Lager", ?, "kom", ?, ?)');
    $stmt->bind_param('isis', $idKorisnika, $vrsta_materijala, $kolicina, $mjesto_isporuke);
    $stmt->execute();
}

if (mysqli_error($conn)) {
    die(mysqli_error($conn));
}

CloseCon($conn);
