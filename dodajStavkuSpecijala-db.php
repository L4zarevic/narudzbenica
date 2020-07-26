<?php

session_start();
if (is_null($_SESSION['prijavljen'])) {
	header('Location: ../narudzbenica/login.php');
}
//header("Content-Type: application/json", true);

require_once 'connection.php';

$conn = OpenCon();

$korisnik = $_SESSION['prijavljen'];
$ar = explode("#", $korisnik, 2);
$ar[1] = rtrim($ar[1], "#");
$idKorisnika = $ar[0];
$imeKorisnika = $ar[1];


$odOsOu = mysqli_real_escape_string($conn, $_REQUEST['od_os_ou']);
$vrstaSociva = mysqli_real_escape_string($conn, $_REQUEST['vrsta_sociva']);
$visina = mysqli_real_escape_string($conn, $_REQUEST['visina']);
$indeks = mysqli_real_escape_string($conn, $_REQUEST['index']);
$materijal = mysqli_real_escape_string($conn, $_REQUEST['materijal']);
$boja = mysqli_real_escape_string($conn, $_REQUEST['boja']);
$baza = mysqli_real_escape_string($conn, $_REQUEST['baza']);
$precnik1 = mysqli_real_escape_string($conn, $_REQUEST['precnik1']);
$precnik2 = mysqli_real_escape_string($conn, $_REQUEST['precnik2']);
$sph = mysqli_real_escape_string($conn, $_REQUEST['sph']);
$cyl = mysqli_real_escape_string($conn, $_REQUEST['cyl']);
$ugao = mysqli_real_escape_string($conn, $_REQUEST['ugao']);
$add = mysqli_real_escape_string($conn, $_REQUEST['add']);
$jm = mysqli_real_escape_string($conn, $_REQUEST['jm']);
$kolicina = mysqli_real_escape_string($conn, $_REQUEST['kolicina']);
$tretman1 = mysqli_real_escape_string($conn, $_REQUEST['tretman1']);
$tretman2 = mysqli_real_escape_string($conn, $_REQUEST['tretman2']);
$napomena = mysqli_real_escape_string($conn, $_REQUEST['napomena']);

$precnik=$precnik1."/".$precnik2;


$upit = "insert into narudzbenica (IDKorisnika,lag_spec,od_os_ou,vrsta_sociva,visina,baza,indeks,vrsta_materijala,precnik,sph,cyl,ugao,adicija,jm,kolicina,tretman1,tretman2,napomena) values ('$idKorisnika','Specijala','$odOsOu', '$vrstaSociva','$visina','$baza','$indeks','$materijal','$precnik','$sph','$cyl','$ugao','$add','$jm','$kolicina','$tretman1','$tretman2','$napomena')";

$rezultat = mysqli_query($conn, $upit);
if (mysqli_error($conn)) {
	die(mysqli_error($conn));
}

CloseCon($conn);
