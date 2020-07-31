<?php

session_start();
if (is_null($_SESSION['prijavljen'])) {
	header('Location: ../narudzbenica/login.php');
}
header("Content-Type: application/json", true);

require_once 'connection.php';

$conn = OpenCon();

$korisnik = $_SESSION['prijavljen'];
$ar = explode("#", $korisnik, 2);
$ar[1] = rtrim($ar[1], "#");
$idKorisnika = $ar[0];
$imeKorisnika = $ar[1];


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
}




$rezultat = mysqli_query($conn, $upit);

if (!$rezultat)
	die(mysqli_error($conn));


// Iz tabele korisnici podaci 
while ($red = mysqli_fetch_object($rezultat)) {
	$sifra = $red->sifra;
	$vrsta_materijala = $red->naziv;
}


$upit = "insert into narudzbenica (IDKorisnika,lag_spec,vrsta_materijala,kolicina) values ('$idKorisnika','Lager', '$vrsta_materijala', '$kolicina')";

$rezultat = mysqli_query($conn, $upit);
if (mysqli_error($conn)) {
	die(mysqli_error($conn));
}

CloseCon($conn);

