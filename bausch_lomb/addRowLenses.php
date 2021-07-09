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
$arS = explode("###", $stavka, 13);
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

$stmt = $conn->prepare('INSERT INTO narudzbenica_bausch_lomb (IDKorisnika,od_os,period,tip,sph,cyl,ugao,bc,td,jm,kolicina,mjesto_isporuke,mpc,broj_naloga,napomena) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
$stmt->bind_param('isssssssssissss', $idKorisnika, $od_os, $period, $tip, $sph, $cyl, $ugao, $bc, $td, $jm, $kolicina, $mjesto_isporuke, $mpc, $broj_naloga, $napomena);
$stmt->execute();
if (mysqli_error($conn)) {
	die(mysqli_error($conn));
}

CloseCon($conn);
