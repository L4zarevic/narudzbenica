<?php

session_start();
if (is_null($_SESSION['prijavljen'])) {
	header('Location: ../narudzbenica/login.php');
}

require_once 'connection.php';

$conn = OpenCon();

$korisnik = $_SESSION['prijavljen'];
$ar = explode("#", $korisnik, 2);
$ar[1] = rtrim($ar[1], "#");
$idKorisnika = $ar[0];
$imeKorisnika = $ar[1];

$stavka = mysqli_real_escape_string($conn, $_REQUEST['stavka']);
$arS = explode("###", $stavka, 7);
$arS[1] = rtrim($arS[1], "###");

$odOsOu = $arS[0];
$vrstaSociva = $arS[1];
$sph = $arS[2];
$add = $arS[3];
$jm = $arS[4];
$kolicina = $arS[5];
$napomena = $arS[6];

$upit = "insert into narudzbenica (IDKorisnika,lag_spec,od_os_ou,vrsta_sociva,sph,adicija,jm,kolicina,napomena) values ('$idKorisnika','Lager','$odOsOu', '$vrstaSociva','$sph','$add','$jm','$kolicina','$napomena')";

$rezultat = mysqli_query($conn, $upit);
if (mysqli_error($conn)) {
	die(mysqli_error($conn));
}
header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=2');
CloseCon($conn);
