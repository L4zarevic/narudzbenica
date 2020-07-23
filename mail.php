<?php
session_start();

if (is_null($_SESSION['prijavljen'])) {
  header('Location: ../narudzbenica/login.php');
}
require_once 'connection.php';

$conn = OpenCon();

$korisnik = $_SESSION['prijavljen'];
$ar = explode("#", $korisnik, 2);
$ar[1] = rtrim($ar[1], "#");
$idKorisnika = $ar[0];
$imeKorisnika = $ar[1];

$stavka = $_REQUEST['stavka'];


$to = "somebody@example.com";
$subject = "Narudžbenica";


$message = "
Narudžbenica od:' . $imeKorisnika . ' \n 
Šifra Naziv Količina TR TRB TRPB TR2 Napomena Napomena#2 \n
---------------------------------------------------------
.$stavka";


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers = "From: webmaster@example.com" . "\r\n" .
  "CC: somebodyelse@example.com";


$result = mail($to, $subject, $message, $headers);
if ($result) {

  $upit = "DELETE FROM `narudzbenica` where IDKorisnika='$idKorisnika'";
  $rezultat = mysqli_query($conn, $upit);

  if (!$rezultat)
    die(mysqli_error($conn));
} else {
  echo "Error";
}
