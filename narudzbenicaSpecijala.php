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

echo "<form <form action='../narudzbenica/mail.php' id='mydata'>
<div class='table-wrapper-scroll-y my-custom-scrollbar'>
<table class='narudzbenica-tabela' id='narudzbenica'>
<thead>
    <tr>
    <th class='tg-0lax'>Lager-Specijala</th>
    <th class='tg-0lax'>Od/Os/Ou</th>
    <th class='tg-0lax'>Vrsta sočiva</th>
    <th class='tg-0lax'>Visina ugradnje</th>
    <th class='tg-0lax'>Baza</th>
    <th class='tg-0lax'>Index</th>
    <th class='tg-0lax'>Vrsta materijala</th>
    <th class='tg-0lax'>Prečnik</th>
    <th class='tg-0lax'>SPH</th>
    <th class='tg-0lax'>CYL</th>
    <th class='tg-0lax'>Ugao</th>
    <th class='tg-0lax'>Add</th>
    <th class='tg-0lax'>JM</th>
    <th class='tg-0lax'>Kol.</th>
    <th class='tg-0lax'>Tretman1</th>
    <th class='tg-0lax'>Tretman2</th>
    <th class='tg-0lax'>Napomena</th>
    <th class='tg-0lax'></th>
    </tr>
    </thead>
    <tbody>";

while ($row = mysqli_fetch_object($result)) {
  echo "<tr>";
  echo "<td>$row->lag_spec</td>";
  echo "<td>$row->od_os_ou</td>";
  echo "<td>$row->vrsta_sociva</td>";
  echo "<td>$row->visina</td>";
  echo "<td>$row->baza</td>";
  echo "<td>$row->indeks</td>";
  echo "<td>$row->vrsta_materijala</td>";
  echo "<td>$row->precnik</td>";
  echo "<td>$row->sph</td>";
  echo "<td>$row->cyl</td>";
  echo "<td>$row->ugao</td>";
  echo "<td>$row->adicija</td>";
  echo "<td>$row->jm</td>";
  echo "<td>$row->kolicina</td>";
  echo "<td>$row->tretman1</td>";
  echo "<td>$row->tretman2</td>";
  echo "<td>$row->napomena</td>";
  echo "<td><i onclick='deleteRow();' id='$row->ID'class='fas fa-trash'></i></td>";
  echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo  "<button type='submit' id='dugmeNaruci' class='btn btn-success'>Potvrdi narudžbu</button>";
echo "</form>";

CloseCon($conn);



?>