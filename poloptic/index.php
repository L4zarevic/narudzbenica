<!DOCTYPE html>
<html lang="en">
<?php
include '../modules/header.php';

//Uklanjanje kolačića
setcookie('cica_maca', '', time() - 3600);

require_once '../connection.php';
$korisnik = $_SESSION['login'];
$ar = explode('#', $korisnik, 4);
$ar[1] = rtrim($ar[1], '#');
$idKorisnika = $ar[0];
$dataBaseName = $ar[3];
$conn = OpenStoreCon($dataBaseName);
mysqli_set_charset($conn, 'utf8');

$con = OpenCon();
$stmt = $con->prepare('SELECT poloptic_access FROM korisnici WHERE IDKorisnika =?');
$stmt->bind_param('i', $idKorisnika);
$stmt->execute();
$result = $stmt->get_result();
$allowed_access = "false";
while ($row = mysqli_fetch_object($result)) {
    $allowed_access = $row->poloptic_access;
}

if ($allowed_access == "false") {
    header('Location: ../index.php');
}


?>

<body id="page-top">
    <div id="wrapper">
        <?php include 'modules/menu.php'; ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php
                include '../modules/logout.php';
                ?>
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">e-Narudžbenica &nbsp;<i class="fa fa-clipboard-list"></i></h1>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <h5>Uputstvo za narudžbenicu</h5>
                            <p>Da biste kreirali željenu narudžbenicu, potrebno je u meniju lijevo izabrati iz ponude Lagerska stakla ili Specijala</p>
                            <p><strong> Lagerska stakla:</strong></p>
                            <p>Iz padajuće liste izaberite željeni index. U polje grafikona unijeti željenu količinu dioptrije, nakon čega je potrebno pritisnuti ENTER na tastaturi radi potvrde unosa.</p>
                            <p><strong>NAPOMENA: Stavke dodavati jednu po jednu</strong></p>
                            <p>Sve željene stavke koje potvrdite nakon unosa biće prikazane u tabeli NARUDŽBENICA koja se nalazi na dnu stranice.</p>
                            <p><strong>Unesene količine za stavke u tabeli NARUDŽBENICA nije moguće uređivati.</strong></p>
                            <p><strong>Obavezno je unositi MPC/kom i Broj radnog naloga za svaku red u narudžbenici. </strong>Unositi stavku po stavku i nakon svakog unosa pritisnuti ENTER na tastaturi radi potvrde.</p>
                            <p>U slučaju pogrešnog unosa dioptrije, stavku iz tabele možete ukloniti klikom na ikonicu kantice <i class='fa fa-trash'></i>, a nakon toga izvršiti ponovni unos iz grafikona.</p>
                            <p>Kada kreirate narudžbenicu, potrebno je kliknuti na dugme <i class='fa fa-paper-plane'></i> POŠALJI NARUDŽBU, nakog čega će Vaša narudžbenica biti poslata veleprodaji "M-OPTIC"-a</p>
                        </div>
                        </br>
                        <div class="companyInfo"> <img id="logo" src="../images/poloptic.png">
                            <!-- <p>“M-OPTIC” d.o.o.</br> ul. Majevička br. 29, 76300 Bijeljina</br> <strong>Tel:</strong> +387 55 222 999, 222 990, 490 010</br> <strong>Fax:</strong> +387 55 222 998</br> <strong>Email:</strong> <a href="mailto:mopticvp@mojaoptika.com">mopticvp@mojaoptika.com</a></br> <a href="https://mojaoptika.com">www.mojaoptika.com</a></p>-->
                        </div>

                    </div>
                    </br>
                    </br>
                </div>
            </div><?php include '../modules/footer.php'; ?>
</body>

</html>