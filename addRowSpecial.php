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
$arS = explode("###", $stavka, 20);
$arS[1] = rtrim($arS[1], "###");

$odOsOu = $arS[0];
$vrstaSociva = $arS[1];
$dizajn = $arS[2];
$koridor_visina = $arS[3];
$segment = $arS[4];
$baza = $arS[5];
$indeks = $arS[6];
$materijal = $arS[7];
$precnik1 = $arS[8];
$precnik2 = $arS[9];
$sph = $arS[10];
$cyl = $arS[11];
$ugao = $arS[12];
$add = $arS[13];
$jm = $arS[14];
$kolicina = $arS[15];
$tretman1 = $arS[16];
$tretman2 = $arS[17];
$pd = $arS[18];
$napomena = $arS[19];

if ($precnik2 == "") {
	$precnik = $precnik1;
} else if ($precnik1 == "") {
	$precnik = $precnik2;
} else {
	$precnik = $precnik1 . "/" . $precnik2;
}


$upit = "insert into narudzbenica (IDKorisnika,lag_spec,od_os_ou,vrsta_sociva,dizajn,visina,segment,baza,indeks,vrsta_materijala,precnik,sph,cyl,ugao,adicija,jm,kolicina,tretman1,tretman2,pd,napomena) values ('$idKorisnika','Specijala','$odOsOu', '$vrstaSociva','$dizajn','$koridor_visina','$segment','$baza','$indeks','$materijal','$precnik','$sph','$cyl','$ugao','$add','$jm','$kolicina','$tretman1','$tretman2','$pd','$napomena')";

$rezultat = mysqli_query($conn, $upit);
if (mysqli_error($conn)) {
	die(mysqli_error($conn));
}
header('Location: ../narudzbenica/specijala.php');
CloseCon($conn);
