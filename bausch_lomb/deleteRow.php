<?php session_start();
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

$id_stavke = mysqli_real_escape_string($conn, $_REQUEST['stavka']);
$stmt = $conn->prepare('DELETE FROM `narudzbenica_bausch_lomb` WHERE ID=?');
$stmt->bind_param('i',$id_stavke);
$stmt->execute();
if (mysqli_error($conn)) {
	die(mysqli_error($conn));
}
CloseCon($conn);

