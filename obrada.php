<?php

session_start();
if (is_null($_SESSION['prijavljen'])) {
	header('Location: ../narudzbenica/login.php');
}

include 'connection.php';
$conn = OpenCon();


if (!$conn) {
	die('Greška pri povezivanju s bazom');
}

//normalizacija podataka
$korisnickoIme = mysqli_real_escape_string($conn, $_POST['korisnickoIme']);
$lozinka = mysqli_real_escape_string($conn, $_POST['lozinka']);

$hash_password = md5($lozinka);

$upit = "select * from korisnici where korisnickoIme='$korisnickoIme' AND lozinka='$hash_password'";
$rezultat = mysqli_query($conn, $upit);

if (!$rezultat)
	die(mysqli_error($conn));



// Iz tabele korisnici podaci 
while ($red = mysqli_fetch_object($rezultat)) {
	$idKorisnika = $red->ID;
	$user = $red->korisnickoIme;
	$pass = $red->lozinka;
	$imeKorisnika = $red->imeKorisnika;
}

//provjere
if (!$korisnickoIme && !$lozinka) {
	$greska = 1;
} else if (!$korisnickoIme) {
	$greska = 1;
} else if (!$lozinka) {
	$greska = 1;
} else {
	if (($korisnickoIme == $user) && ($hash_password == $pass)) {
		$greska = 0;
	} else {
		$greska = 1;
	}
}
if ($greska == 1) {
	$greska = 'Neuspiješno logovanje';
	header("Location:login.php?msg=$greska");
	exit;
} else {
	$_SESSION['prijavljen'] = $idKorisnika."#".$imeKorisnika;

	die(header('Location:../narudzbenica/index.php'));
}
