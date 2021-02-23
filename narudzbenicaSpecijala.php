<?php if (is_null($_SESSION['prijavljen'])) {
    header('Location: ../narudzbenica/login.php');
}
require_once 'connection.php';
$korisnik = $_SESSION['prijavljen'];
$ar = explode('#', $korisnik, 4);
$ar[1] = rtrim($ar[1], '#');
$idKorisnika = $ar[0];
$dataBaseName = $ar[3];
$conn = OpenStoreCon($dataBaseName);
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn, " select * from narudzbenica where IDKorisnika = $idKorisnika ");
echo "<div class='table-wrapper-scroll-y'><table class='narudzbenica-tabela' id='narudzbenica'><thead><tr><th class='tg-0lax'>Lag-Spec</th><th class='tg-0lax'>Od/Os/Ou</th><th class='tg-0lax'>Vrsta soč.</th><th class='tg-0lax'>Dizajn</th><th class='tg-0lax'>PRL/OCHT</th><th class='tg-0lax'>Segm.</th><th class='tg-0lax'>Baza</th><th class='tg-0lax'>Index</th><th class='tg-0lax'>Vrsta materijala</th><th class='tg-0lax'>Prečnik</th><th class='tg-0lax'>SPH</th><th class='tg-0lax'>CYL</th><th class='tg-0lax'>Ugao</th><th class='tg-0lax'>Add</th><th class='tg-0lax'>JM</th><th class='tg-0lax'>Kol.</th><th class='tg-0lax'>Tretman1</th><th class='tg-0lax'>Tretman2</th><th class='tg-0lax'>PD</th><th class='tg-0lax'>Napomena</th><th class='tg-0lax'></th></tr></thead><tbody>";
while ($row = mysqli_fetch_object($result)) {
    echo "<tr>";
    echo "<td>$row->lag_spec</td>";
    echo "<td>$row->od_os_ou</td>";
    echo "<td>$row->vrsta_sociva</td>";
    echo "<td>$row->dizajn</td>";
    echo "<td>$row->visina</td>";
    echo "<td>$row->segment</td>";
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
    echo "<td>$row->pd</td>";
    echo "<td><input name='napomena' title='Unesite napomenu' class='form-control' onkeypress='getValue();' id='n$row->ID' type='text' value='" . $row->napomena . "'></td>";
    echo "<td><i onclick='deleteRow();' id='$row->ID' title='Ukloni stavku' class='fas fa-trash'></i></td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</br>";
if (mysqli_num_rows($result) > 0) {
    echo "<a  onClick=\"javascript: return confirm('Želite da pošaljete narudžbu? ');\" href='../narudzbenica/mail.php' class='btn btn-success'><i class='fas fa-paper-plane'></i> Pošalji narudžbu</a>";
}
echo " <p id='info'>U tabeli je moguće unijeti samo Napomenu i da bi potvrdili unos pritisnite ENTER na tastaturi.</br> Da bi izbrisali stavku u tabeli, kliknite na ikonicu kantice <i class='fas fa-trash'></i></p>";
if (isset($_REQUEST['msg'])) {
    if ($_REQUEST['msg'] == '1') {
        echo "<script src=\"js/alertify.min.js\"></script>";
        echo "<script type=\"text/javascript\"> alertify.error('Greška prilikom slanja');</script>";
        echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname);</script>";
    } else if ($_REQUEST['msg'] == '0') {
        echo "<script src=\"js/alertify.min.js\"></script>";
        echo "<script type=\"text/javascript\">alertify.success('Narudžbenica je poslata');</script>";
        echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname);</script>";
    }
}
CloseCon($conn);
