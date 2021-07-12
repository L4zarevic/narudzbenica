<?php

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
$arS = explode("###", $stavka, 9);
$arS[1] = rtrim($arS[1], "###");

$vrsta_materijala = $arS[0];
$sph = $arS[1];
$cyl = $arS[2];
$jm = $arS[3];
$kolicina = $arS[4];
$mpc = $arS[5];
$broj_naloga = $arS[6];
$napomena1 = $arS[7];
$id_stavke = $arS[8];

$napomena = str_replace('\n', " ", $napomena1);

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

$stmt = $conn->prepare('UPDATE narudzbenica_moptic SET IDKorisnika=?,vrsta_materijala=?,sph=?,cyl=?,jm=?,kolicina=?,mjesto_isporuke=?,mpc=?,broj_naloga=?,napomena=? WHERE ID=?');
$stmt->bind_param('isssssssssi', $idKorisnika, $vrsta_materijala, $sph, $cyl, $jm, $kolicina, $mjesto_isporuke, $mpc, $broj_naloga, $napomena, $id_stavke);
$stmt->execute();
if (mysqli_error($conn)) {
	die(mysqli_error($conn));
}
CloseCon($conn);
