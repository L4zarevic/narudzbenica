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
$arS = explode("###", $stavka, 5);
$arS[1] = rtrim($arS[1], "###");

$brend = $arS[0];
$model = $arS[1];
$velicina = $arS[2];
$napomena1 = $arS[3];
$id_stavke = $arS[4];

$napomena = str_replace('\n', " ", $napomena1);

$stmt = $conn->prepare('UPDATE narudzbenica_rez_dijelovi SET brend=?, model=?, velicina=?, napomena=? WHERE ID=?');
$stmt->bind_param('ssssi', $brend, $model, $velicina, $napomena, $id_stavke);
$stmt->execute();
if (mysqli_error($conn)) {
	die(mysqli_error($conn));
}
CloseCon($conn);
