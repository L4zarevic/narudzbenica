<?php
session_start();

if (is_null($_SESSION['prijavljen'])) {
  header('Location: ../narudzbenica/login.php');
}
require_once 'connection.php';

$conn = OpenCon();

$korisnik = $_SESSION['prijavljen'];
$korisnik = $_SESSION['prijavljen'];
$ar = explode('#', $korisnik, 4);
$ar[1] = rtrim($ar[1], '#');
$idKorisnika = $ar[0];
$imeKorisnika = $ar[1];
$dataBaseName = $ar[3];
$conn = OpenStoreCon($dataBaseName);
mysqli_set_charset($conn, 'utf8');





$result = mysqli_query($conn, " SELECT * FROM narudzbenica WHERE IDKorisnika = $idKorisnika ");


//$sep = "\t";
//$schema_insert = "Lag-Spec \t OD/OS/OU \t Vrsta soc. \t Dizajn \t PRL/OCHT \t Segm. \t Baza \t Index \t Vrsta materija \t SPH \t CYL \t Ugao \t Add \t JM \t Kol. \t Tretman1 \t Tretman2 \t PD \t Napomena \n";
$schema_insert = '<html><body>';
$schema_insert .= '<br/>Narudzba od: ' . "$imeKorisnika" . '<br/>';
$schema_insert .= 'Datum narudzbe: ' . date("d.m.Y") . ' u ' . date('H:i') . '<br/>';
$schema_insert .= '<br/>';
$schema_insert .= '<table rules="all" style="border-color:#000;" cellpadding="2">';
$schema_insert .= '<thead>';
$schema_insert .= '<tr>';
$schema_insert .= '<th>Lag-Spec</th>';
$schema_insert .= '<th>Od/Os/Ou</th>';
$schema_insert .= '<th>Vrsta soc.</th>';
$schema_insert .= '<th>Dizajn</th>';
$schema_insert .= '<th>Visina ugr.</th>';
$schema_insert .= '<th>Segment</th>';
$schema_insert .= '<th>Baza</th>';
$schema_insert .= '<th>Index</th>';
$schema_insert .= '<th>Vrsta materijala</th>';
$schema_insert .= '<th>Precn.</th>';
$schema_insert .= '<th>SPH</th>';
$schema_insert .= '<th>CYL</th>';
$schema_insert .= '<th>Ugao</th>';
$schema_insert .= '<th>Add</th>';
$schema_insert .= '<th>JM</th>';
$schema_insert .= '<th>Kol.</th>';
$schema_insert .= '<th>Tretman1</th>';
$schema_insert .= '<th>Tretman2</th>';
$schema_insert .= '<th>PD</th>';
$schema_insert .= '<th>Napomena</th>';
$schema_insert .= '<th></th>';
$schema_insert .= '</tr>';
$schema_insert .= '</thead>';
$schema_insert .= '<tbody>';
$schema_insert .= '<tr>';
while ($row = mysqli_fetch_object($result)) {

  // $schema_insert .= $row->lag_spec . $sep;
  // $schema_insert .= $row->od_os_ou . $sep;
  // $schema_insert .= $row->vrsta_sociva . $sep;
  // $schema_insert .= $row->dizajn . $sep;
  // $schema_insert .= $row->visina . $sep;
  // $schema_insert .= $row->segment . $sep;
  // $schema_insert .= $row->baza . $sep;
  // $schema_insert .= $row->indeks . $sep;
  // $schema_insert .= $row->vrsta_materijala . $sep;
  // $schema_insert .= $row->sph . $sep;
  // $schema_insert .= $row->cyl . $sep;
  // $schema_insert .= $row->ugao . $sep;
  // $schema_insert .= $row->adicija . $sep;
  // $schema_insert .= $row->jm . $sep;
  // $schema_insert .= $row->kolicina . $sep;
  // $schema_insert .= $row->tretman1 . $sep;
  // $schema_insert .= $row->tretman2 . $sep;
  // $schema_insert .= $row->pd . $sep;
  // $schema_insert .= $row->napomena . $sep;




  //   while ($row = mysqli_fetch_object($result)) {
  $schema_insert .= '<td>' . $row->lag_spec . '</td>';
  $schema_insert .= '<td>' . $row->od_os_ou . '</td>';
  $schema_insert .= '<td>' . $row->vrsta_sociva . '</td>';
  $schema_insert .= '<td>' . $row->dizajn . '</td>';
  $schema_insert .= '<td>' . $row->visina . '</td>';
  $schema_insert .= '<td>' . $row->segment . '</td>';
  $schema_insert .= '<td>' . $row->baza . '</td>';
  $schema_insert .= '<td>' . $row->indeks . '</td>';
  $schema_insert .= '<td>' . $row->vrsta_materijala . '</td>';
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
  $schema_insert .= '<td>' . $row->napomena . '</td>';
  $schema_insert .= '</tr>';
  $schema_insert .= '</tbody>';
  //   }


  //   $message .= '</table>';
  //   $message .= '</body></html>';
  // } else {



  // $schema_insert = str_replace($sep . "$", "", $schema_insert);
  // $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);

  // print(trim(str_replace(',', " ", $schema_insert)));
  // print "\n";
}
file_put_contents('narudzbenica.xls', $schema_insert);


$to = "info@mojaoptika.com";

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
$subject = "eNarudzbenica - " . $imeKorisnika;
$separator = md5(date('r', time()));
// carriage return type (we use a PHP end of line constant)
$eol = PHP_EOL;

// attachment name
$filename = "narudzbenica.xls";

//$pdfdoc is PDF generated by FPDF
$attachment = chunk_split(base64_encode(file_get_contents('narudzbenica.xls')));

// main header
$headers  = "From: " . $from . $eol;
$headers .= "MIME-Version: 1.0" . $eol;
$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"";

// no more headers after this, we start the body! //

$body = "--" . $separator . $eol;
$header .= "Content-Type: text/html; charset=utf-8" . $eol;
$body .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
$body .= 'Narudzba od: ' . "$imeKorisnika" . $eol;
$body .= 'Datum narudzbe: ' . date("d.m.Y") . ' u ' . date('H:i')  . $eol;
$body .= "------------------------" . $eol;
$body .= "Email poslat putem aplikacije eNarudzbenica. https://mojaoptika.com/narudzbenica" . $eol;

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
  echo "mail send ... OK";

  $upit = "DELETE FROM `narudzbenica` WHERE IDKorisnika = $idKorisnika";
  $rezultat = mysqli_query($conn, $upit);

  if (!$rezultat) {
    die(mysqli_error($conn));
  }

  CloseCon($conn);
  header('Location: ../narudzbenica/thanks.php');
  die();
} else {
  echo "mail send ... ERROR";
  header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=1');
}
// if (mysqli_num_rows($result) > 0) {
//   // output data of each row

//   $header = "From: no-reply@mojaoptika.com" . "\r\n";
//   $to    = 'info@mojaoptika.com';
//   $header .= "MIME-Version: 1.0\r\n";
//   $header .= "Content-Type: text/html; charset=utf-8\r\n";
//   $title  = 'Narudžbenica';

//   $message = '<html><body>';
//   $message .= '<br/>Narudžba od: ' . $imeKorisnika . '<br/>';
//   $message .= 'Datum narudžbe: ' . date("d.m.Y") . ' u ' . date('H:i') . '<br/>';
//   $message .= '<br/>';
//   $message .= '<table rules="all" style="border-color:#000;" cellpadding="2">';
//   $message .= '<thead>';
//   $message .= '<tr>';
//   $message .= '<th>Lag-Spec</th>';
//   $message .= '<th>Od/Os/Ou</th>';
//   $message .= '<th>Vrsta soč.</th>';
//   $message .= '<th>Dizajn</th>';
//   $message .= '<th>Visina ugr.</th>';
//   $message .= '<th>Segment</th>';
//   $message .= '<th>Baza</th>';
//   $message .= '<th>Index</th>';
//   $message .= '<th>Vrsta materijala</th>';
//   $message .= '<th>Prečn.</th>';
//   $message .= '<th>SPH</th>';
//   $message .= '<th>CYL</th>';
//   $message .= '<th>Ugao</th>';
//   $message .= '<th>Add</th>';
//   $message .= '<th>JM</th>';
//   $message .= '<th>Kol.</th>';
//   $message .= '<th>Tretman1</th>';
//   $message .= '<th>Tretman2</th>';
//   $message .= '<th>PD</th>';
//   $message .= '<th>Napomena</th>';
//   $message .= '<th></th>';
//   $message .= '</tr>';
//   $message .= '</thead>';
//   $message .= '<tbody>';


//   while ($row = mysqli_fetch_object($result)) {
//     $message .= '<td>' . $row->lag_spec . '</td>';
//     $message .= '<td>' . $row->od_os_ou . '</td>';
//     $message .= '<td>' . $row->vrsta_sociva . '</td>';
//     $message .= '<td>' . $row->dizajn. '</td>';
//     $message .= '<td>' . $row->visina . '</td>';
//     $message .= '<td>' . $row->segment . '</td>';
//     $message .= '<td>' . $row->baza . '</td>';
//     $message .= '<td>' . $row->indeks . '</td>';
//     $message .= '<td>' . $row->vrsta_materijala . '</td>';
//     $message .= '<td>' . $row->precnik . '</td>';
//     $message .= '<td>' . $row->sph . '</td>';
//     $message .= '<td>' . $row->cyl . '</td>';
//     $message .= '<td>' . $row->ugao . '</td>';
//     $message .= '<td>' . $row->adicija . '</td>';
//     $message .= '<td>' . $row->jm . '</td>';
//     $message .= '<td>' . $row->kolicina . '</td>';
//     $message .= '<td>' . $row->tretman1 . '</td>';
//     $message .= '<td>' . $row->tretman2 . '</td>';
//     $message .= '<td>' . $row->pd . '</td>';
//     $message .= '<td>' . $row->napomena . '</td>';
//     $message .= '</tbody>';
//   }


//   $message .= '</table>';
//   $message .= '</body></html>';
// } else {
//   header('Location: ' . $_SERVER['HTTP_REFERER'].'?msg=1');
//   echo "0 results";
// }

// if (mail($to, $title, $message, $header)) {
//   echo "successful";

//   $upit = "DELETE FROM `narudzbenica` WHERE IDKorisnika = $idKorisnika";
//   $rezultat = mysqli_query($conn, $upit);

//   if (!$rezultat)
//     die(mysqli_error($conn));

//   CloseCon($conn);
//   header('Location: ../narudzbenica/thanks.php');
//   die();
// } else {
//   header('Location: ' . $_SERVER['HTTP_REFERER'].'?msg=1');
//   echo "false";
// }
