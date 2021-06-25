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
$arS = explode("###", $stavka, 4);
$arS[1] = rtrim($arS[1], "###");

$brend = $arS[0];
$model = $arS[1];
$velicina = $arS[2];
$napomena1 = $arS[3];

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
$stmt = $conn->prepare('INSERT INTO narudzbenica_rez_dijelovi (IDKorisnika,brend,model,velicina,napomena,mjesto_isporuke) VALUES (?,?,?,?,?,?)');
$stmt->bind_param('isssss', $idKorisnika, $brend, $model, $velicina, $napomena, $mjesto_isporuke);
$stmt->execute();
if (mysqli_error($conn)) {
	die(mysqli_error($conn));
}

CloseCon($conn);
