<?php if (is_null($_SESSION['login'])) {
    header('Location: ../login.php');
}
$korisnik = $_SESSION['login'];
$ar = explode('#', $korisnik, 4);
$ar[1] = rtrim($ar[1], '#');
$idKorisnika = $ar[0];
$dataBaseName = $ar[3];
$conn = OpenStoreCon($dataBaseName);
mysqli_set_charset($conn, 'utf8');
$stmt = $conn->prepare('SELECT * FROM narudzbenica_pol WHERE IDKorisnika =?');
$stmt->bind_param('i', $idKorisnika);
$stmt->execute();
$result = $stmt->get_result();
echo "<div class='naslov'><h1 id='naslovNarudzbenice'>Narudžbenica - Pol Optic</h1><hr></div>";
echo "<div class='table-wrapper-scroll-y my-custom-scrollbar'>
<table class='narudzbenica-tabela' id='narudzbenica'>
<tr>
<th class='tg-0lax'>Lager-Specijala</th>
<th class='tg-0lax'>Vrsta materijala</th>
<th id='poljeKolicine' class='tg-0lax'>Količina</th>
<th class='tg-0lax'>Mjesto isporuke</th>
<th class='tg-0lax'>MPC/kom</th>
<th class='tg-0lax'>Broj radnog naloga</th>
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
    echo "<td>$row->mjesto_isporuke</td>";
    echo "<td><input name='mpc' maxlength='25' title='Unesite MPC' style='font-size: 12px;'class='form-control' onkeypress='getValue();' id='m$row->ID' type='text' value='" . $row->mpc . "'></td>";
    echo "<td><input name='broj_radnog_naloga' maxlength='30' title='Unesite broj radnog naloga' style='font-size: 12px;'class='form-control' onkeypress='getValue();' id='r$row->ID' type='text' value='" . $row->broj_naloga . "'></td>";
    echo "<td><input name='napomena' maxlength='250' title='Unesite napomenu' style='font-size: 12px;'class='form-control' onkeypress='getValue();' id='n$row->ID' type='text' value='" . $row->napomena . "'></td>";
    echo "<td><i onclick='deleteRow();' title='Ukloni stavku' id='$row->ID'class='fas fa-trash fa-lg'></i></td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</br>";
if (mysqli_num_rows($result) > 0) {
    echo "<button type='button' onclick='checkEmptyTable()' class='btn btn-primary send'><i class='fa fa-paper-plane'></i> Pošalji narudžbenicu</button>";
}
echo " <p id='info'>U tabeli je moguće unijeti / izmijeniti samo <strong>MPC po komadu</strong> i <strong>Napomenu</strong>. </br> Da bi potvrdili unos pritisnite ENTER na tastaturi.</br> Za brisanje stavke u tabeli, kliknite na ikonicu kantice <i class='fa fa-trash'></i></p>";
if (isset($_REQUEST['msg'])) {
    if ($_REQUEST['msg'] == '1') {
        echo "<script src=\"../js/alertify.min.js\"></script>";
        echo "<script type=\"text/javascript\">alertify.error('Greška prilikom slanja');</script>";
        echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname);</script>";
    }
    if ($_REQUEST['msg'] == '0') {
        echo "<script src=\"../js/alertify.min.js\"></script>";
        echo "<script type=\"text/javascript\">alertify.success('Narudžbenica je poslata');</script>";
        echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname);</script>";
    }
    if ($_REQUEST['msg'] == '2') {
        echo "<script src=\"../js/alertify.min.js\"></script>";
        echo "<script type=\"text/javascript\">alertify.success('Stavka je dodata');</script>";
        echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname); window.scrollTo({ top: document.body.scrollHeight })</script>";
    }
}
CloseCon($conn);
