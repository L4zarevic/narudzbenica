<?php session_start();
if (is_null($_SESSION['prijavljen'])) {
    header('Location: ../narudzbenica/login.php');
}
include 'connection.php';
$korisnik = $_SESSION['prijavljen'];
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
switch ($oznaka) {
    case 1:
        $upit = "SELECT * FROM `1.50_cr39_uc_hmc` WHERE IDPolja='$idPolja'";
        break;
    case 2:
        $upit = "SELECT * FROM `1.56_shmc_uv420_ab` WHERE IDPolja='$idPolja'";
        break;
    case 3:
        $upit = "SELECT * FROM `1.60_transition_hmc` WHERE IDPolja='$idPolja'";
        break;
    case 4:
        $upit = "SELECT * FROM `1.56_photocromic_hmc` WHERE IDPolja='$idPolja'";
        break;
    case 5:
        $upit = "SELECT * FROM `1.59_polycarbonate_hmc` WHERE IDPolja='$idPolja'";
        break;
    case 6:
        $upit = "SELECT * FROM `1.50_transition_hmc` WHERE IDPolja='$idPolja'";
        break;
    case 7:
        $upit = "SELECT * FROM `1.53_trivex_hmc` WHERE IDPolja='$idPolja'";
        break;
    case 8:
        $upit = "SELECT * FROM `1.60_hmc` WHERE IDPolja='$idPolja'";
        break;
    case 9:
        $upit = "SELECT * FROM `1.60_uv420_ab` WHERE IDPolja='$idPolja'";
        break;
    case 10:
        $upit = "SELECT * FROM `1.67_hmc_uv420_ab` WHERE IDPolja='$idPolja'";
        break;
    case 11:
        $upit = "SELECT * FROM `1.74_ahmc` WHERE IDPolja='$idPolja'";
        break;
    case 12:
        $upit = "SELECT * FROM `1.50_solea_hc_solea_ultra_backside` WHERE IDPolja='$idPolja'";
        break;
}
$rezultat = mysqli_query($conn, $upit);
if (!$rezultat) die(mysqli_error($conn));
while ($red = mysqli_fetch_object($rezultat)) {
    $sifra = $red->sifra;
    $vrsta_materijala = $red->naziv;
}
$upit = "INSERT INTO narudzbenica (IDKorisnika,lag_spec,vrsta_materijala,kolicina) VALUES ('$idKorisnika','Lager', '$vrsta_materijala', '$kolicina')";
$rezultat = mysqli_query($conn, $upit);
if (mysqli_error($conn)) {
    die(mysqli_error($conn));
}
header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=2');
CloseCon($conn);
