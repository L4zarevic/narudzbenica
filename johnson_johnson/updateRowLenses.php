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
$arS = explode("###", $stavka, 14);
$arS[1] = rtrim($arS[1], "###");

$od_os = $arS[0];
$period = $arS[1];
$tip = $arS[2];
$sph = $arS[3];
$cyl = $arS[4];
$ugao  = $arS[5];
$bc = $arS[6];
$td = $arS[7];
$jm = $arS[8];
$kolicina = $arS[9];
$mpc = $arS[10];
$broj_naloga = $arS[11];
$napomena1 = $arS[12];
$id_stavke = $arS[13];

$napomena = str_replace('\n', " ", $napomena1);

$stmt = $conn->prepare('UPDATE narudzbenica_jj SET IDKorisnika=?,od_os=?,period=?,tip=?,sph=?,cyl=?,ugao=?,bc=?,td=?,jm=?,kolicina=?,mpc=?,broj_naloga=?,napomena=? WHERE ID=?');
$stmt->bind_param('isssssssssisssi', $idKorisnika, $od_os, $period, $tip, $sph, $cyl, $ugao, $bc, $td, $jm, $kolicina, $mpc, $broj_naloga, $napomena, $id_stavke);
$stmt->execute();
if (mysqli_error($conn)) {
	die(mysqli_error($conn));
}
CloseCon($conn);
