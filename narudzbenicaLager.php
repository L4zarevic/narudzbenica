<?php

if (is_null($_SESSION['prijavljen'])) {
  header('Location: ../narudzbenica/login.php');
}

$korisnik = $_SESSION['prijavljen'];
$ar = explode("#", $korisnik, 2);
$ar[1] = rtrim($ar[1], "#");
$IDKorisnika = $ar[0];


//include 'connection.php';
$conn = OpenCon();


$result = mysqli_query($conn, "SELECT * FROM narudzbenica WHERE IDKorisnika = $IDKorisnika ");

echo "<div class='table-wrapper-scroll-y my-custom-scrollbar'>
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
  echo "<td><input name='napomena' class='form-control' onkeypress='getValue();' id='n$row->ID' type='text' value='" . $row->napomena . "'></td>";
  echo "<td><i onclick='deleteRow();' title='Ukloni stavku' id='$row->ID'class='fas fa-trash'></i></td>";
  echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</br>";
if (mysqli_num_rows($result) > 0) {
  echo  "<a  onClick=\"javascript: return confirm('Želite da potvrdite narudžbu? ');\" href='../narudzbenica/mail.php' class='btn btn-success'>Potvrdi narudžbu</a>";
}
echo " <p id='info'>U tabeli je moguće unijeti samo Napomenu i da bi potvrdili unos pritisnite ENTER na tastaturi.</br> Da bi izbrisali stavku u tabeli, kliknite na ikonicu kantice <i class='fas fa-trash'></i></p>";


if (isset($_REQUEST['msg'])) {
  if ($_REQUEST['msg'] == '1') {
    echo "<script src=\"js/alertify.min.js\"></script>";
    echo "<script type=\"text/javascript\">alertify.error('Greška prilikom slanja');</script>";
    echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname);</script>";
  }
  if ($_REQUEST['msg'] == '0') {
    echo "<script src=\"js/alertify.min.js\"></script>";
    echo "<script type=\"text/javascript\">alertify.success('Narudžbenica je poslata');</script>";
    echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname);</script>";
  }
  if ($_REQUEST['msg'] == '2') {
    echo "<script src=\"js/alertify.min.js\"></script>";
    echo "<script type=\"text/javascript\">alertify.success('Stavka je dodata');</script>";
    echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname);</script>";
  }
}

CloseCon($conn);
