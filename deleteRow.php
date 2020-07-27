<?php

session_start();
if (is_null($_SESSION['prijavljen'])) {
	header('Location: ../narudzbenica/login.php');
}

require_once 'connection.php';

$conn = OpenCon();

$stavka = mysqli_real_escape_string($conn,$_REQUEST['stavka']);

$upit = "DELETE FROM `narudzbenica` WHERE ID='$stavka'";
$rezultat = mysqli_query($conn, $upit);

if (!$rezultat)
  die(mysqli_error($conn));

CloseCon($conn);
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>