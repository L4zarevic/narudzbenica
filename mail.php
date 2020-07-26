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
$IDKorisnika = $ar[0];
$imeKorisnika = $ar[1];

//$stavka = $_REQUEST['stavka'];


$result = mysqli_query($conn, " SELECT * FROM narudzbenica WHERE IDKorisnika = $IDKorisnika ");

//var_dump($result);
if (mysqli_num_rows($result) > 0) {
  // output data of each row


  $header = "From: no-reply@test.com" . "\r\n";
  $to    = 'info@mojaoptika.com';
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-Type: text/html; charset=utf-8\r\n";
  $title  = 'Narudžbenica';

  $message = '<html><body>';
  $message .= '<br/>Narudžba od: ' . $imeKorisnika . '<br/>';
  $message .= 'Datum narudžbe: ' . date("d.m.Y") . ' u ' . date('H:i') . '<br/>';
  $message .= '<br/>';
  $message .= '<table rules="all" style="border-color: #666;" cellpadding="2">';
  $message .= '<thead>';
  $message .= '<tr>';
  $message .= '<th>Lager-Specijala</th>';
  $message .= '<th>Od/Os/Ou</th>';
  $message .= '<th>Vrsta soč.</th>';
  $message .= '<th>Visina ugr.</th>';
  $message .= '<th>Baza</th>';
  $message .= '<th>Index</th>';
  $message .= '<th>Vrsta materijala</th>';
  $message .= '<th>Prečn.</th>';
  $message .= '<th>SPH</th>';
  $message .= '<th>CYL</th>';
  $message .= '<th>Ugao</th>';
  $message .= '<th>Add</th>';
  $message .= '<th>JM</th>';
  $message .= '<th>Kol.</th>';
  $message .= '<th>Tretman1</th>';
  $message .= '<th>Tretman2</th>';
  $message .= '<th>Napomena</th>';
  $message .= '<th></th>';
  $message .= '</tr>';
  $message .= '</thead>';
  $message .= '<tbody>';


  while ($row = mysqli_fetch_object($result)) {
    $message .= '<td>' . $row->lag_spec . '</td>';
    $message .= '<td>' . $row->od_os_ou . '</td>';
    $message .= '<td>' . $row->vrsta_sociva . '</td>';
    $message .= '<td>' . $row->visina . '</td>';
    $message .= '<td>' . $row->baza . '</td>';
    $message .= '<td>' . $row->indeks . '</td>';
    $message .= '<td>' . $row->vrsta_materijala . '</td>';
    $message .= '<td>' . $row->precnik . '</td>';
    $message .= '<td>' . $row->sph . '</td>';
    $message .= '<td>' . $row->cyl . '</td>';
    $message .= '<td>' . $row->ugao . '</td>';
    $message .= '<td>' . $row->adicija . '</td>';
    $message .= '<td>' . $row->jm . '</td>';
    $message .= '<td>' . $row->kolicina . '</td>';
    $message .= '<td>' . $row->tretman1 . '</td>';
    $message .= '<td>' . $row->tretman2 . '</td>';
    $message .= '<td>' . $row->napomena . '</td>';
    $message .= '</tbody>';
  }


  $message .= '</table>';
  $message .= '</body></html>';
} else {
  echo "0 results";
}

if (mail($to, $title, $message, $header)) {
  echo "successful";

  $upit = "DELETE FROM `narudzbenica` WHERE IDKorisnika = $IDKorisnika";
  $rezultat = mysqli_query($conn, $upit);

  if (!$rezultat)
    die(mysqli_error($conn));

  CloseCon($conn);
  header('Location: ' . $_SERVER['HTTP_REFERER']);
  die();
} else {
  echo "false";
}



// $to = "somebody@example.com";
// $subject = "Narudžbenica";


// $message = "
// Narudžbenica od:' . $imeKorisnika . ' \n 
// Šifra Naziv Količina TR TRB TRPB TR2 Napomena Napomena#2 \n
// ---------------------------------------------------------
// .$stavka";


// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// $headers = "From: webmaster@example.com" . "\r\n" .
//   "CC: somebodyelse@example.com";


// $result = mail($to, $subject, $message, $headers);
// if ($result) {

//   $upit = "DELETE FROM `narudzbenica` where IDKorisnika='$idKorisnika'";
//   $rezultat = mysqli_query($conn, $upit);

//   if (!$rezultat)
//     die(mysqli_error($conn));
// } else {
//   echo "Error";
// }
