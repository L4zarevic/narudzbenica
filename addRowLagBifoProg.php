<?php

session_start();
if (is_null($_SESSION['prijavljen'])) {
	header('Location: ../narudzbenica/login.php');
}

require_once 'connection.php';

$korisnik = $_SESSION['prijavljen'];
$ar = explode('#', $korisnik, 4);
$ar[1] = rtrim($ar[1], '#');
$idKorisnika = $ar[0];
$dataBaseName = $ar[3];
$conn = OpenStoreCon($dataBaseName);
mysqli_set_charset($conn, 'utf8');

$stavka = mysqli_real_escape_string($conn, $_REQUEST['stavka']);
$arS = explode("###", $stavka, 8);
$arS[1] = rtrim($arS[1], "###");

$odOsOu = $arS[0];
$vrstaSociva = $arS[1];
$materijal = $arS[2];
$sph = $arS[3];
$add = $arS[4];
$jm = $arS[5];
$kolicina = $arS[6];
$napomena = $arS[7];

$stmt = $conn->prepare('INSERT INTO narudzbenica (IDKorisnika,lag_spec,od_os_ou,vrsta_sociva,vrsta_materijala,sph,adicija,jm,kolicina,napomena) values (?,"Lager",?,?,?,?,?,?,?,?)');
$stmt->bind_param('issssssis', $idKorisnika, $odOsOu, $vrstaSociva, $materijal, $sph, $add, $jm, $kolicina, $napomena);
$stmt->execute();
if (mysqli_error($conn)) {
	die(mysqli_error($conn));
}

header('Location: ../narudzbenica/lager_bifocal_progresiv.php');
CloseCon($conn);
