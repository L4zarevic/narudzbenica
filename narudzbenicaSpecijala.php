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
    <th class='tg-0lax'>Lager-Specijala</th>
    <th class='tg-0lax'>Od/Os/Ou</th>
    <th class='tg-0lax'>Vrsta soč.</th>
    <th class='tg-0lax'>Baza</th>
    <th class='tg-0lax'>Index</th>
    <th class='tg-0lax'>Vrsta materijala</th>
    <th class='tg-0lax'>Prečn.</th>
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

// while ($row = mysqli_fetch_object($result)) {
//   echo "<tr>";
//   echo "<td><input name='lag-spec' type='text' class='form-control' disabled value='" . $row->lag_spec . "'></td>";
//   echo "<td><input name='naziv' type='text' class='form-control' disabled value='" . $row->naziv . "'></td>";
//   echo "<td><input name='kolicina' type='text' class='form-control' disabled value='" . $row->kolicina . "'></td>";
//   echo "<td><input name='napomena' class='form-control' onkeypress='getValue();' id=n$row->ID type='text' value='" . $row->napomena . "'></td>";
//   echo "<td><a class='stavkaNarudzbenice' href='deleteRow.php?stavka={$row->ID}'><i class='fas fa-trash'></i></td>";
//   echo "</tr>";
// }
echo "</tbody>";
echo "</table>";
echo  "<button type='button' id='dugmeNaruci' class='btn btn-success'>Naruči</button>";
echo "</form>";

CloseCon($conn);



?>