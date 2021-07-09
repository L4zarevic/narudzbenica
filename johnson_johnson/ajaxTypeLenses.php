<?php

//Skripta za dobijanje podataka o sočivima na osnovu izabratih select opcija - kaskadni select

session_start();
if (is_null($_SESSION['login'])) {
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

//Provjera da li je POST metodom poslata vrijednost promjeljive period sociva OD
if (isset($_POST['period'])) {
    //Dodjeljivanje poslatih vrijednosti promjenljivim
    $period = mysqli_real_escape_string($conn, $_POST['period']);
    $proizvodjac = mysqli_real_escape_string($conn, $_POST['proizvodjac']);

    //Na osnovu dobijenih parametara se vrši upit
    $stmt = $conn->prepare('SELECT ID,tip FROM sociva WHERE ID_proizvodjaca =? AND period =? GROUP BY tip');
    $stmt->bind_param('is', $proizvodjac, $period);
    $stmt->execute();
    $result = $stmt->get_result();

    //Rezultati upita će biti prikazane kao opcije u select box-u.
    //Definišemo praznu opciju kao podrazumijevanu
    echo '<option default></option>';
    //Ispis pronađenih vrijednosti upita
    while ($row = $result->fetch_object()) {
        echo "<option value='$row->ID'>$row->tip</option>";
    }
}

//Provjera da li je POST metodom poslata vrijednost promjeljive tip sočiva OD
if (isset($_POST['tip'])) {
    //Dodjeljivanje poslatih vrijednosti promjenljivoj
    $tip = mysqli_real_escape_string($conn, $_POST['tip']);

    //Na osnovu dobijenog parametra se vrši upit za čitanje baznih krivina (bc) i veličine sočiva (td)
    $stmt = $conn->prepare('SELECT bc,td FROM sociva WHERE ID =?');
    $stmt->bind_param('i', $tip);
    $stmt->execute();
    $result = $stmt->get_result();

    $bcValue = '';
    $tdValue = '';
    //Dodjeljivanje rezultata upita definisanim promjenljivim
    while ($row = $result->fetch_object()) {
        $bcOldValue = $row->bc;
        $tdValue = $row->td;
        //Za svako sočivo može biti definisano više baznih krivina. One su numeričke vrijednosti (sa decimalnim zarezom).
        //Vrijednosti su zapisane u jedno polje, a seperator je "|"
        $bcNewValue = explode('|', $bcOldValue);

        //Dobijena vrijednost bazne krivine se dijeli na osnovu separatora u više opcija
        foreach ($bcNewValue as $bc) {
            $bcValue .= "<option>$bc</option>";
        }
    }
    //Bazne krivine , separator "@@@" i veličina sočiva su vrijednosti koje se vraćaju obrascu za pregled sočiva
    //Format ovog zapisa bi izgledao npr. '<option>8.4</option><option>8.8</option>@@@14.3'
    echo $bcValue . '@@@' . $tdValue;
}
