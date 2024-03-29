<?php if (is_null($_SESSION['login'])) {
    header('Location: ../login.php');
}
require_once '../connection.php';
$korisnik = $_SESSION['login'];
$ar = explode('#', $korisnik, 4);
$ar[1] = rtrim($ar[1], '#');
$idKorisnika = $ar[0];
$dataBaseName = $ar[3];
$conn = OpenStoreCon($dataBaseName);
mysqli_set_charset($conn, 'utf8');
$stmt = $conn->prepare('SELECT * FROM narudzbenica_moptic WHERE IDKorisnika =?');
$stmt->bind_param('i', $idKorisnika);
$stmt->execute();
$result = $stmt->get_result();
echo "<div class='naslov'><h1 id='naslovNarudzbenice'>Narudžbenica - M-Optic</h1><hr></div>";
echo "<div class='table-wrapper-scroll-y table-hover'>
<table class='narudzbenica-tabela' id='narudzbenica'>
<thead>
<tr>
<th class='tg-0lax'>OD/OS/OU</th>
<th class='tg-0lax'>Vrsta \nsočiva</th>
<th class='tg-0lax'>Vrsta \nmaterijala</th>
<th class='tg-0lax'>SPH</th>
<th class='tg-0lax'>CYL</th>
<th class='tg-0lax'>Add/Dig</th>
<th class='tg-0lax'>JM</th>
<th class='tg-0lax'>Količina</th>
<th class='tg-0lax'>Mjesto\nispor.</th>
<th class='tg-0lax'>MPC\n(kom)</th>
<th class='tg-0lax'>Broj\nradnog\nnaloga</th>
<th class='tg-0lax'>Napomena</th>
<th class='tg-0lax'></th>
</tr>
</thead>
<tbody>";
while ($row = mysqli_fetch_object($result)) {
    echo "<tr id='$row->ID' onclick='updateEntireRowMopticLagerBifoProg()'>";
    echo "<td>$row->od_os_ou</td>";
    echo "<td>$row->vrsta_sociva</td>";
    echo "<td>$row->vrsta_materijala</td>";
    echo "<td>$row->sph</td>";
    echo "<td>$row->cyl</td>";
    echo "<td>$row->adicija</td>";
    echo "<td>$row->jm</td>";
    echo "<td>$row->kolicina</td>";
    echo "<td>$row->mjesto_isporuke</td>";
    echo "<td>$row->mpc</td>";
    echo "<td>$row->broj_naloga</td>";
    echo "<td>$row->napomena</td>";
    echo "<td class='tg-options'><i onclick='deleteRow(event);' id='$row->ID' title='Ukloni stavku' class='fas fa-trash fa-lg'></i></td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</br>";
if (mysqli_num_rows($result) > 0) {
    echo "<button type='button' onclick='checkSpecialTable()' class='btn btn-primary send'><i class='fa fa-paper-plane'></i> Pošalji narudžbenicu</button>";
}
echo " <p id='info'>Da bi izbrisali stavku u tabeli, kliknite na ikonicu kantice <i class='fa fa-trash'></i></p>";
if (isset($_REQUEST['msg'])) {
    if ($_REQUEST['msg'] == '1') {
        echo "<script src=\"../js/alertify.min.js\"></script>";
        echo "<script type=\"text/javascript\"> alertify.error('Greška prilikom slanja');</script>";
        echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname);</script>";
    } else if ($_REQUEST['msg'] == '0') {
        echo "<script src=\"../js/alertify.min.js\"></script>";
        echo "<script type=\"text/javascript\">alertify.success('Narudžbenica je poslata');</script>";
        echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname);</script>";
    }
    if ($_REQUEST['msg'] == '2') {
        echo "<script src=\"../js/alertify.min.js\"></script>";
        echo "<script type=\"text/javascript\">alertify.success('Stavka je dodata');</script>";
        echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname); window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' })</script>";
    }
    if ($_REQUEST['msg'] == '3') {
        echo "<script src=\"../js/alertify.min.js\"></script>";
        echo "<script type=\"text/javascript\">alertify.success('Stavka je ažurirana');</script>";
        echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname); window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' })</script>";
    }
}
CloseCon($conn);
