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

//Provjera da li su unijeti MPC/kom i Broj radnog naloga za sve stavke narudžbenice
$stmt1 =  $conn->prepare('SELECT * FROM narudzbenica_pol WHERE ((mpc IS NULL OR mpc ="") OR (broj_naloga IS NULL OR broj_naloga ="")) AND IDKorisnika =?');
$stmt1->bind_param('i', $idKorisnika);
$stmt1->execute();
$result1 = $stmt1->get_result();
if (mysqli_num_rows($result1) > 0) {
  CloseCon($conn);
  header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=4');
  die();
}

//Selektovanje svih stavki iz tabele narudzbenica_pol za korisnika koji je ulogovavan. Zapisi se sortiraju da se prvo prikažu lager pa specijale
$stmt = $conn->prepare('SELECT * FROM narudzbenica_pol WHERE IDKorisnika =? ORDER BY lag_spec ASC');
$stmt->bind_param('i', $idKorisnika);
$stmt->execute();
$result = $stmt->get_result();

//Kreiramo promjenljivu koja sadrži tabelu koja sadrži selektovane redove na osnu upita
$schema_insert = '<html><head><meta charset="utf-8"></head><body>';
$schema_insert .= '<h2>Narudžbenica - Poloptic</h2>';
$schema_insert .= '<br/>Narudžba od: ' . $imeKorisnika . '<br/>';
$schema_insert .= 'Datum narudžbe: ' . date("d.m.Y") . ' u ' . date('H:i') . '<br/>';
$schema_insert .= '<br/>';
$schema_insert .= '<table rules="all" style="border-color:#000;" cellpadding="2">';
$schema_insert .= '<thead>';
$schema_insert .= '<tr>';
$schema_insert .= '<th>R.br.</th>';
$schema_insert .= "<th>Lag\nSpec</th>";
$schema_insert .= "<th>OD\nOS\nOU</th>";
$schema_insert .= "<th>Vrsta\nsoč.</th>";
$schema_insert .= '<th>Dizajn</th>';
$schema_insert .= "<th>PRL\nOCHT</th>";
$schema_insert .= '<th>Segm.</th>';
$schema_insert .= '<th>Baza</th>';
$schema_insert .= '<th>Index</th>';
$schema_insert .= "<th>Vrsta \nmaterijala</th>";
$schema_insert .= '<th>Prečn.</th>';
$schema_insert .= '<th>SPH</th>';
$schema_insert .= '<th>CYL</th>';
$schema_insert .= '<th>Ugao</th>';
$schema_insert .= "<th>Add\nDig</th>";
$schema_insert .= '<th>JM</th>';
$schema_insert .= '<th>Kol.</th>';
$schema_insert .= '<th>Tr.1</th>';
$schema_insert .= '<th>Tr.2</th>';
$schema_insert .= '<th>PD</th>';
$schema_insert .= "<th>Mjesto\nispor.</th>";
$schema_insert .= "<th>MPC\n(kom)</th>";
$schema_insert .= "<th>Br.\nradnog\nnaloga</th>";
$schema_insert .= '<th>Napomena</th>';
$schema_insert .= '<th></th>';
$schema_insert .= '</tr>';
$schema_insert .= '</thead>';
$schema_insert .= '<tbody>';
$schema_insert .= '<tr>';

$rb = 0;
while ($row = mysqli_fetch_object($result)) {
  $schema_insert .= '<td>' . ($rb = $rb + 1) . '</td>';
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
  $schema_insert .= '<td>' . $row->mjesto_isporuke . '</td>';
  $schema_insert .= '<td>' . $row->mpc . '</td>';
  $schema_insert .= '<td>' . $row->broj_naloga . '</td>';
  $schema_insert .= '<td>' . $row->napomena . '</td>';
  $schema_insert .= '</tr>';
  $schema_insert .= '</tbody>';
}

//Kreiramo html fajl koji sadrži vrijednosti promjenljive $schema_insert
file_put_contents('../orders/poloptic/narudzbenica_Pol_' . $imeKorisnika . '_' . date("d.m.Y_H.i") . '.html', $schema_insert);


//Slanje mejla sa tabelom narudžbe
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
$subject = "eNarudzbenica - Nova narudzba (" . $imeKorisnika . ")";
$separator = md5(date('r', time()));
// carriage return type (we use a PHP end of line constant)
$eol = PHP_EOL;

// attachment name
$filename = "narudzbenica_Pol_" . $imeKorisnika . "_" . date("d.m.Y_H.i") . ".html";

//$pdfdoc is PDF generated by FPDF
$attachment = chunk_split(base64_encode(file_get_contents('../orders/poloptic/narudzbenica_Pol_' . $imeKorisnika . '_' . date("d.m.Y_H.i") . '.html')));

// main header
$headers  = "From: " . $from . $eol;
$headers .= "MIME-Version: 1.0" . $eol;
$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"";

// no more headers after this, we start the body! //

$body = "--" . $separator . $eol;
$body .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
$body .= "Narudzbenica - Poloptic" . $eol;
$body .= 'Narudzba od: ' . "$imeKorisnika" . $eol;
$body .= 'Datum narudzbe: ' . date("d.m.Y") . ' u ' . date('H:i')  . $eol;
$body .= "------------------------" . $eol;
$body .= "Email je poslat putem aplikacije eNarudzbenica. https://mojaoptika.com/narudzbenica" . $eol;

// message
$body .= "--" . $separator . $eol;
$body .= "Content-Type: text/html; charset=\"utf-8\"" . $eol;
$body .= "Content-Transfer-Encoding: 7bit" . $eol . $eol;
//$body .= $message . $eol;

// attachment
$body .= "--" . $separator . $eol;
$body .= "Content-Type: application/octet-stream; charset=utf-8;   name=\"" . $filename . "\"" . $eol;
$body .= "Content-Transfer-Encoding: base64" . $eol;
$body .= "Content-Disposition: attachment;  filename=\"" . $filename . "\"" . $eol . $eol;
$body .= $attachment . $eol;
$body .= "--" . $separator . "--";

if (mail($to, $subject, $body, $headers)) {

  //Slanje notifikacionog mejla korisniku koji je izvšio narudžbu
  $header = "From: no-reply@mojaoptika.com" . $eol;
  $header .= "MIME-Version: 1.0" . $eol;
  $header .= "Content-Type: multipart/mixed; charset=utf-8; boundary=\"" . $separator . "\"";
  $title = "eNarudzbenica - Uspjesna narudzbina";

  $message = "Zahvaljujemo se na vasoj narudzbini" . $eol;
  $message = "Narudzbenica - Poloptic" . $eol;
  $message .= 'Narudzba od: ' . $imeKorisnika . $eol;;
  $message .= 'Datum narudzbe: ' . date("d.m.Y") . ' u ' . date('H:i') . $eol;;
  $message .= "------------------------" . $eol;
  $message .= "Email poslat putem aplikacije eNarudzbenica. https://mojaoptika.com/narudzbenica";

  // message & attachment
  $nmessage = "--" . $separator . $eol;
  $nmessage .= "Content-type:text/plain; charset=utf-8;" . $eol;
  $nmessage .= "Content-Transfer-Encoding: 7bit" . $eol . $eol;
  $nmessage .= $message . $eol;
  $nmessage .= "--" . $separator . $eol;
  $nmessage .= "Content-Type: application/octet-stream; charset=utf-8; name=\"" . $filename . "\"" . $eol;
  $nmessage .= "Content-Transfer-Encoding: base64" . $eol;
  $nmessage .= "Content-Disposition: attachment;  filename=\"" . $filename . "\"" . $eol . $eol;
  $nmessage .= $attachment . $eol;
  $nmessage .= "--" . $separator . "--";

  mail($email, $title, $nmessage, $header);

  // Kopiranje poslatih stavku u novu tabelu koju koristi aplikacija VP e-Narudžbenica
  $stmt3 = $conn->prepare('INSERT INTO mojaopt_vpnarudzbenica.narudzbenica_pol (lag_spec,od_os_ou,vrsta_sociva,dizajn,visina,segment,baza,indeks,vrsta_materijala,precnik,sph,cyl,ugao,adicija,jm,kolicina,tretman1,tretman2,pd,mpc,broj_naloga,napomena,komitenti_radnje,dobavljac,mjesto_isporuke) 
  SELECT lag_spec,od_os_ou,vrsta_sociva,dizajn,visina,segment,baza,indeks,vrsta_materijala,precnik,sph,cyl,ugao,adicija,jm,kolicina,tretman1,tretman2,pd,mpc,broj_naloga,napomena,mojaopt_narudzbenica.narudzbenica_pol.mjesto_isporuke,mojaopt_optike.korisnici.poloptic,mojaopt_optike.korisnici.mjesto_isporuke FROM mojaopt_narudzbenica.narudzbenica_pol 
  JOIN mojaopt_optike.korisnici 
  ON narudzbenica_pol.IDKorisnika = mojaopt_optike.korisnici.ID 
  WHERE IDKorisnika =?');
  $stmt3->bind_param('i', $idKorisnika);
  $stmt3->execute();
  if (mysqli_error($conn)) {
    die(mysqli_error($conn));
  }
  ////////////////////////////////////////////////////////////////////////////////////

  //Nakon uspiješne narudžbe, sve stavke za tog korisnika se brišu
  $stmt = $conn->prepare('DELETE FROM `narudzbenica_pol` WHERE IDKorisnika =?');
  $stmt->bind_param('i', $idKorisnika);
  $stmt->execute();
  if (mysqli_error($conn)) {
    die(mysqli_error($conn));
  }

  CloseCon($conn);

  //Redirekcija na stranicu uspiješna narudžba
  header('Location: thanks.php');
  die();
} else {

  header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=1');
}
