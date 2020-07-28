<?php

// session_start();

if (is_null($_SESSION['prijavljen'])) {
  header('Location: ../narudzbenica/login.php');
}

require_once 'connection.php';

$korisnik = $_SESSION['prijavljen'];
$ar = explode("#", $korisnik, 2);
$ar[1] = rtrim($ar[1], "#");
$IDKorisnika = $ar[0];

$conn = OpenCon();
$result = mysqli_query($conn, " select * from narudzbenica where IDKorisnika = $IDKorisnika ");

echo "<form action='../narudzbenica/mail.php' id='mydata'>
<div class='table-wrapper-scroll-y my-custom-scrollbar'>
<table class='narudzbenica-tabela' id='narudzbenica'>
 
    <tr>
    <th class='tg-0lax'>Lager-Specijala</th>
    <th class='tg-0lax'>Vrsta materijala</th>
    <th id='poljeKolicine' class='tg-0lax'>Količina</th>
    <th class='tg-0lax'>Napomena</th>
    <th class='tg-0lax'></th>
    </tr>
    </thead>
    <tbody>";

while ($row = mysqli_fetch_object($result)) {
  echo "<tr>";
  echo "<td>$row->lag_spec</td>";
  echo "<td>$row->vrsta_materijala</td>";
  echo "<td>$row->kolicina</td>";
  echo "<td><input name='napomena' class='form-control' onkeypress='getValue();' id=n$row->ID type='text' value='" . $row->napomena . "'></td>";
  echo "<td><i onclick='deleteRow();' id='$row->ID'class='fas fa-trash'></i></td>";
  echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo  "<button type='submit' id='dugmeNaruci' onClick=\"javascript: return confirm('Želite da potvrdite narudžbu? ');\" class='btn btn-success'>Potvrdi narudžbu </button>";
echo "</form>";

if (isset($_REQUEST['msg'])) {
  if ($_REQUEST['msg'] == '0') {
    echo "<script src=\"js/alertify.min.js\"></script>";
    echo "<script type=\"text/javascript\"> alertify.error('Greška prilikom slanja');</script>";
  } else if ($_REQUEST['msg'] == '1') {
    echo "<script src=\"js/alertify.min.js\"></script>";
    echo "<script type=\"text/javascript\">alertify.success('Narudžbenica je poslata');</script>";
  }
}

CloseCon($conn);
