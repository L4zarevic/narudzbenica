<?php
//Dodavanje zapisa lager bifokal i progresiv u tabelu

session_start();
if (is_null($_SESSION['login'])) {
	header('Location: ../login.php');
}

require_once '../connection.php';

$korisnik = $_SESSION['login'];
$ar = explode('#', $korisnik, 4);
$ar[1] = rtrim($ar[1], '#');
$idKorisnika = $ar[0];
$dataBaseName = $ar[3];
$conn = OpenStoreCon($dataBaseName);
mysqli_set_charset($conn, 'utf8');

$stavka = mysqli_real_escape_string($conn, $_REQUEST['stavka']);
$arS = explode("###", $stavka, 10);
$arS[1] = rtrim($arS[1], "###");

$odOsOu = $arS[0];
$vrstaSociva = $arS[1];
$materijal = $arS[2];
$sph = $arS[3];
$add = $arS[4];
$jm = $arS[5];
$kolicina = $arS[6];
$mpc = $arS[7];
$broj_naloga = $arS[8];
$napomena1 = $arS[9];

$napomena = str_replace('\n', " ", $napomena1);

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
$stmt = $conn->prepare('INSERT INTO narudzbenica_moptic (IDKorisnika,od_os_ou,vrsta_sociva,vrsta_materijala,sph,adicija,jm,kolicina,mjesto_isporuke,mpc,broj_naloga,napomena) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)');
$stmt->bind_param('issssssissss', $idKorisnika, $odOsOu, $vrstaSociva, $materijal, $sph, $add, $jm, $kolicina, $mjesto_isporuke, $mpc, $broj_naloga, $napomena);
$stmt->execute();
if (mysqli_error($conn)) {
	die(mysqli_error($conn));
}

CloseCon($conn);
