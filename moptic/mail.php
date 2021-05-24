<?php
session_start();

if (is_null($_SESSION['login'])) {
  header('Location: ../login.php');
}
require_once '../connection.php';

$conn = OpenCon();

$korisnik = $_SESSION['login'];
$ar = explode('#', $korisnik, 4);
$ar[1] = rtrim($ar[1], '#');
$idKorisnika = $ar[0];
$imeKorisnika = $ar[2];
$dataBaseName = $ar[3];
$conn = OpenStoreCon($dataBaseName);
mysqli_set_charset($conn, 'utf8');


$stmt = $conn->prepare('SELECT * FROM narudzbenica_moptic WHERE IDKorisnika =?');
$stmt->bind_param('i', $idKorisnika);
$stmt->execute();
$result = $stmt->get_result();

$schema_insert = '<html><head><meta charset="utf-8"></head><body>';
$schema_insert .= '<h2>Narudžbenica - M-Optic</h2>';
$schema_insert .= '<br/>Narudžba od: ' . "$imeKorisnika" . '<br/>';
$schema_insert .= 'Datum narudžbe: ' . date("d.m.Y") . ' u ' . date('H:i') . '<br/>';
$schema_insert .= '<br/>';
$schema_insert .= '<table rules="all" style="border-color:#000;" cellpadding="2">';
$schema_insert .= '<thead>';
$schema_insert .= '<tr>';
$schema_insert .= '<th>R.br.</th>';
$schema_insert .= '<th>Od/Os/Ou</th>';
$schema_insert .= '<th>Vrsta soč.</th>';
$schema_insert .= '<th>Dizajn</th>';
$schema_insert .= '<th>PRL/OCHT</th>';
$schema_insert .= '<th>Segment</th>';
$schema_insert .= '<th>Baza</th>';
$schema_insert .= '<th>Index</th>';
$schema_insert .= '<th>Prečn.</th>';
$schema_insert .= '<th>SPH</th>';
$schema_insert .= '<th>CYL</th>';
$schema_insert .= '<th>Ugao</th>';
$schema_insert .= '<th>Add</th>';
$schema_insert .= '<th>JM</th>';
$schema_insert .= '<th>Kol.</th>';
$schema_insert .= '<th>Tretman1</th>';
$schema_insert .= '<th>Tretman2</th>';
$schema_insert .= '<th>PD</th>';
$schema_insert .= '<th>Mjesto ispor.</th>';
$schema_insert .= '<th>MPC/kom</th>';
$schema_insert .= '<th>Br. radnog naloga</th>';
$schema_insert .= '<th>Napomena</th>';
$schema_insert .= '<th></th>';
$schema_insert .= '</tr>';
$schema_insert .= '</thead>';
$schema_insert .= '<tbody>';
$schema_insert .= '<tr>';

$rb = 0;
while ($row = mysqli_fetch_object($result)) {
  $schema_insert .= '<td>' . ($rb = $rb + 1) . '</td>';
  $schema_insert .= '<td>' . $row->od_os_ou . '</td>';
  $schema_insert .= '<td>' . $row->vrsta_sociva . '</td>';
  $schema_insert .= '<td>' . $row->dizajn . '</td>';
  $schema_insert .= '<td>' . $row->visina . '</td>';
  $schema_insert .= '<td>' . $row->segment . '</td>';
  $schema_insert .= '<td>' . $row->baza . '</td>';
  $schema_insert .= '<td>' . $row->indeks . '</td>';
  $schema_insert .= '<td>' . $row->precnik . '</td>';
  $schema_insert .= '<td>' . $row->sph . '</td>';
  $schema_insert .= '<td>' . $row->cyl . '</td>';
  $schema_insert .= '<td>' . $row->ugao . '</td>';
  $schema_insert .= '<td>' . $row->adicija . '</td>';
  $schema_insert .= '<td>' . $row->jm . '</td>';
  $schema_insert .= '<td>' . $row->kolicina . '</td>';
  $schema_insert .= '<td>' . $row->tretman1 . '</td>';
  $schema_insert .= '<td>' . $row->tretman2 . '</td>';
  $schema_insert .= '<td>' . $row->pd . '</td>';
  $schema_insert .= '<td>' . $row->mjesto_isporuke . '</td>';
  $schema_insert .= '<td>' . $row->mpc . '</td>';
  $schema_insert .= '<td>' . $row->broj_naloga . '</td>';
  $schema_insert .= '<td>' . $row->napomena . '</td>';
  $schema_insert .= '</tr>';
  $schema_insert .= '</tbody>';
}
file_put_contents('../orders/moptic/narudzbenica_MOptic_' . $imeKorisnika . '_' . date("d.m.Y_H.i") . '.html', $schema_insert);

$to = "narudzba@mojaoptika.com";

$con = OpenCon();
$stmt = $con->prepare('SELECT email FROM korisnici WHERE ID =?');
$stmt->bind_param('i', $idKorisnika);
$stmt->execute();
$result = $stmt->get_result();
$email = "";
while ($row = mysqli_fetch_object($result)) {
  $email = $row->email;
}

$from = $email;
$subject = "eNarudžbenica - Nova narudžba ( " . $imeKorisnika . ")";
$separator = md5(date('r', time()));
// carriage return type (we use a PHP end of line constant)
$eol = PHP_EOL;

// attachment name
$filename = "narudzbenica_MOptic_" . $imeKorisnika . "_" . date("d.m.Y_H.i") . ".html";

//$pdfdoc is PDF generated by FPDF
$attachment = chunk_split(base64_encode(file_get_contents('../orders/moptic/narudzbenica_MOptic_' . $imeKorisnika . '_' . date("d.m.Y_H.i") . '.html')));

// main header
$headers  = "From: " . $from . $eol;
$headers .= "MIME-Version: 1.0" . $eol;
$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"";

// no more headers after this, we start the body! //

$body = "--" . $separator . $eol;
$body .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
$body .= "Narudžbenica - M-Optic" . $eol;
$body .= 'Narudžba od: ' . "$imeKorisnika" . $eol;
$body .= 'Datum narudžbe: ' . date("d.m.Y") . ' u ' . date('H:i')  . $eol;
$body .= "------------------------" . $eol;
$body .= "Email je poslat putem aplikacije eNarudžbenica. https://mojaoptika.com/narudzbenica" . $eol;

// message
$body .= "--" . $separator . $eol;
$body .= "Content-Type: text/html; charset=\"utf-8\"" . $eol;
$body .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
//$body .= $message . $eol;

// attachment
$body .= "--" . $separator . $eol;
$body .= "Content-Type: application/octet-stream; charset=utf-8;   name=\"" . $filename . "\"" . $eol;
$body .= "Content-Transfer-Encoding: base64" . $eol;
$body .= "Content-Disposition: attachment;  filename=\"" . $filename . "\"" . $eol . $eol;
$body .= $attachment . $eol;
$body .= "--" . $separator . "--";

if (mail($to, $subject, $body, $headers)) {

  $uid = md5(uniqid(time()));

  $header = "From: no-reply@mojaoptika.com" . "\r\n";;
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";
  $title = "eNarudžbenica - Uspiješna narudžba";

  $message = "Zahvaljujemo se na vašoj narudžbini! \n";
  $message .= "Narudžbenica - М-Оptic \n";
  $message .= 'Narudžba od: ' . $imeKorisnika . "\n";
  $message .= 'Datum narudžbe: ' . date("d.m.Y") . ' u ' . date('H:i') . "\n";
  $message .= "------------------------ \n";
  $message .= "Email je poslat putem aplikacije eNarudžbenica. https://mojaoptika.com/narudzbenica \n";

  // message & attachment
  $nmessage = "--" . $uid . "\r\n";
  $nmessage .= "Content-type:text/plain; charset=utf-8\r\n";
  $nmessage .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
  $nmessage .= $message . "\r\n\r\n";
  $nmessage .= "--" . $uid . "\r\n";
  $nmessage .= "Content-Type: application/octet-stream; charset=utf-8; name=\"" . $filename . "\"\r\n";
  $nmessage .= "Content-Transfer-Encoding: base64\r\n";
  $nmessage .= "Content-Disposition: attachment; filename=\"" . $filename . "\"\r\n\r\n";
  $nmessage .= $attachment . "\r\n\r\n";
  $nmessage .= "--" . $uid . "--";

  mail($email, $title, $nmessage, $header);

  $stmt = $conn->prepare('DELETE FROM `narudzbenica_moptic` WHERE IDKorisnika =?');
  $stmt->bind_param('i', $idKorisnika);
  $stmt->execute();
  if (mysqli_error($conn)) {
    die(mysqli_error($conn));
  }

  CloseCon($conn);
  header('Location:thanks.php');
  die();
} else {

  header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=1');
}
