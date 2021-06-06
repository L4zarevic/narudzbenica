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
$arS = explode("###", $stavka, 22);
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
$mpc = $arS[19];
$broj_naloga = $arS[20];
$napomena1 = $arS[21];

//Formatiranje zapisa napomene gdje se novi redovi (\n) zamijenjuju razmakom
$napomena = str_replace('\n', " ", $napomena1);

//Ako su unesena oba prečnika onda se zapisi spajaju u jedan string sa separator /
if ($precnik2 == "") {
	$precnik = $precnik1;
} else if ($precnik1 == "") {
	$precnik = $precnik2;
} else {
	$precnik = $precnik1 . "/" . $precnik2;
}

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
$stmt = $conn->prepare('INSERT INTO narudzbenica_pol (IDKorisnika,lag_spec,od_os_ou,vrsta_sociva,dizajn,visina,segment,baza,indeks,vrsta_materijala,precnik,sph,cyl,ugao,adicija,jm,kolicina,tretman1,tretman2,pd,mjesto_isporuke,mpc,broj_naloga,napomena) values (?,"Spec",?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
$stmt->bind_param('issssssssssssssisssssss', $idKorisnika, $odOsOu, $vrstaSociva, $dizajn, $koridor_visina, $segment, $baza, $indeks, $materijal, $precnik, $sph, $cyl, $ugao, $add, $jm, $kolicina, $tretman1, $tretman2, $pd, $mjesto_isporuke, $mpc, $broj_naloga, $napomena);
$stmt->execute();
if (mysqli_error($conn)) {
	die(mysqli_error($conn));
}

CloseCon($conn);
