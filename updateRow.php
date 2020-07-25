<?php

session_start();
if (is_null($_SESSION['prijavljen'])) {
	header('Location: ../narudzbenica/login.php');
}
header("Content-Type: application/json", true);

require_once 'connection.php';

$conn = OpenCon();

$korisnik = $_SESSION['prijavljen'];
$ar = explode("#", $korisnik, 2);
$ar[1] = rtrim($ar[1], "#");
$idKorisnika = $ar[0];
$imeKorisnika = $ar[1];


$stavka = mysqli_real_escape_string($conn,$_REQUEST['stavka']);


$ar = explode("#", $stavka, 2);
$ar[1] = rtrim($ar[1], "#");
$ID = $ar[0];
$napomena = $ar[1];

$realID=substr($ID,1);


$upit = "UPDATE narudzbenica SET napomena='$napomena' where ID='$realID'";
$rezultat = mysqli_query($conn, $upit);

if (!$rezultat)
  die(mysqli_error($conn));

CloseCon($conn);
header('Location: ' . $_SERVER['HTTP_REFERER']);
