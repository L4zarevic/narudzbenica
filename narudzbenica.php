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

echo "<form id='mydata'>
<div class='table-wrapper-scroll-y my-custom-scrollbar'>
<table class='narudzbenica-tabela' id='narudzbenica'>
<thead>
    <tr>
    <th class='tg-0lax'>Sifra</th>
    <th class='tg-0lax'>Naziv</th>
    <th id='poljeKolicine' class='tg-0lax'>Količina</th>
    <th class='tg-0lax'>Napomena</th>
    <th class='tg-0lax'></th>
    </tr>
    </thead>
    <tbody>";

while ($row = mysqli_fetch_object($result)) {

  echo "<tr>";
  echo "<td><input name='sifra' type='text' class='form-control' disabled value='" . $row->sifra . "'></td>";
  echo "<td><input name='naziv' type='text' class='form-control' disabled value='" . $row->naziv . "'></td>";
  echo "<td><input name='kolicina' type='text' class='form-control' disabled value=" . $row->kolicina . "></td>";
  echo "<td><input name='napomena' type='text' class='form-control'></td>";
  echo "<td><input name='napomena2' type='text' class='form-control'></td>";
  echo "<td><a class='stavkaNarudzbenice' href='deleteRow.php?stavka={$row->ID}'><i class='fas fa-trash'></i></td>";
  echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo  "<button type='button' id='dugmeNaruci' class='btn btn-success' onclick='showTableData()'>Naruči</button>";
echo "</form>";

CloseCon($conn);
?>