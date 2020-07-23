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


$stavka = mysqli_real_escape_string($conn,$_REQUEST['stavka']);

$ar = explode("#", $stavka, 2);
$ar[1] = rtrim($ar[1], "#");
$kolicina = $ar[0];
$idPolja = $ar[1];



$upit = "SELECT * FROM `1.50_transition_hmc` where IDPolja='$idPolja'";
$rezultat = mysqli_query($conn, $upit);

if (!$rezultat)
	die(mysqli_error($conn));


// Iz tabele korisnici podaci 
while ($red = mysqli_fetch_object($rezultat)) {
	$sifra = $red->sifra;
	$naziv = $red->naziv;
}


$upit = "insert into narudzbenica (IDKorisnika,sifra,naziv,kolicina) values ('$idKorisnika','$sifra', '$naziv', '$kolicina')";

$rezultat = mysqli_query($conn, $upit);
if (mysqli_error($conn)) {
	die(mysqli_error($conn));
}

CloseCon($conn);