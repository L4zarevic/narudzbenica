<!DOCTYPE html>
<?php session_start();
if (is_null($_SESSION['login'])) {
    header('Location:login.php');
}

require_once 'connection.php';
$conn = OpenCon();

$korisnik = $_SESSION['login'];
$ar = explode('#', $korisnik, 4);
$ar[1] = rtrim($ar[1], '#');
$idKorisnika = $ar[0];
$con = OpenCon();
mysqli_set_charset($conn, 'utf8');

function moptic_access($con, $idKorisnika)
{
    $stmt = $con->prepare('SELECT moptic_access FROM narudzbenica_pristup WHERE IDKorisnika =?');
    $stmt->bind_param('i', $idKorisnika);
    $stmt->execute();
    $result = $stmt->get_result();
    $allowed_access = "false";
    while ($row = mysqli_fetch_object($result)) {
        $allowed_access = $row->moptic_access;
    }

    if ($allowed_access == "true") {
        echo '<a href="moptic/index.php"><img src="images/moptic.svg" alt="M-OPTIC" style="width:100%"><div class="container"></div></a>';
    } else {
        echo '<img src="images/moptic_disabled.png" alt="M-OPTIC" style="width:100%; cursor: not-allowed;">';
    }
}

function poloptic_access($con, $idKorisnika)
{
    $stmt = $con->prepare('SELECT poloptic_access FROM narudzbenica_pristup WHERE IDKorisnika =?');
    $stmt->bind_param('i', $idKorisnika);
    $stmt->execute();
    $result = $stmt->get_result();
    $allowed_access = "false";
    while ($row = mysqli_fetch_object($result)) {
        $allowed_access = $row->poloptic_access;
    }

    if ($allowed_access == "true") {
        echo '<a href="poloptic/index.php"><img src="images/poloptic.svg" alt="Poloptic" style="width:100%"><div class="container"></div></a>';
    } else {
        echo '<img src="images/poloptic_disabled.png" alt="Poloptic" style="width:100%; cursor: not-allowed;">';
    }
}


function essilor_access($con, $idKorisnika)
{
    $stmt = $con->prepare('SELECT essilor_access FROM narudzbenica_pristup WHERE IDKorisnika =?');
    $stmt->bind_param('i', $idKorisnika);
    $stmt->execute();
    $result = $stmt->get_result();
    $allowed_access = "false";
    while ($row = mysqli_fetch_object($result)) {
        $allowed_access = $row->essilor_access;
    }

    if ($allowed_access == "true") {
        echo '<a href="essilor/index.php"><img src="images/essilor.svg" alt="Essilor" style="width:100%"><div class="container"></div></a>';
    } else {
        echo '<img src="images/essilor_disabled.png" alt="Essilor" style="width:100%; cursor: not-allowed;">';
    }
}

function hoya_access($con, $idKorisnika)
{
    $stmt = $con->prepare('SELECT hoya_access FROM narudzbenica_pristup WHERE IDKorisnika =?');
    $stmt->bind_param('i', $idKorisnika);
    $stmt->execute();
    $result = $stmt->get_result();
    $allowed_access = "false";
    while ($row = mysqli_fetch_object($result)) {
        $allowed_access = $row->hoya_access;
    }

    if ($allowed_access == "true") {
        echo '<a href="hoya/index.php"><img src="images/hoya.svg" alt="Hoya" style="width:100%"><div class="container"></div></a>';
    } else {
        echo '<img src="images/hoya_disabled.png" alt="Hoya" style="width:100%; cursor: not-allowed;">';
    }
}

function johnson_johnson_access($con, $idKorisnika)
{
    $stmt = $con->prepare('SELECT jj_access FROM narudzbenica_pristup WHERE IDKorisnika =?');
    $stmt->bind_param('i', $idKorisnika);
    $stmt->execute();
    $result = $stmt->get_result();
    $allowed_access = "false";
    while ($row = mysqli_fetch_object($result)) {
        $allowed_access = $row->jj_access;
    }

    if ($allowed_access == "true") {
        echo '<a href="johnson_johnson/index.php"><img src="images/j&j.svg" alt="Johnson & Johnson" style="width:100%">';
    } else {
        echo '<img src="images/j&j_disabled.png" alt="Johnson & Johnson" style="width:100%; cursor: not-allowed;">';
    }
}

function alcon_access($con, $idKorisnika)
{
    $stmt = $con->prepare('SELECT alcon_access FROM narudzbenica_pristup WHERE IDKorisnika =?');
    $stmt->bind_param('i', $idKorisnika);
    $stmt->execute();
    $result = $stmt->get_result();
    $allowed_access = "false";
    while ($row = mysqli_fetch_object($result)) {
        $allowed_access = $row->alcon_access;
    }

    if ($allowed_access == "true") {
        echo '<a href="alcon/index.php"><img src="images/j&j.svg" alt="Alcon" style="width:100%">';
    } else {
        echo '<img src="images/alcon_disabled.png" alt="Alcon" style="width:100%; cursor: not-allowed;">';
    }
}

function bausch_lomb_access($con, $idKorisnika)
{
    $stmt = $con->prepare('SELECT bausch_lomb_access FROM narudzbenica_pristup WHERE IDKorisnika =?');
    $stmt->bind_param('i', $idKorisnika);
    $stmt->execute();
    $result = $stmt->get_result();
    $allowed_access = "false";
    while ($row = mysqli_fetch_object($result)) {
        $allowed_access = $row->bausch_lomb_access;
    }

    if ($allowed_access == "true") {
        echo '<a href="bausch_lomb/index.php"><img src="images/j&j.svg" alt="Bausch Lomb" style="width:100%">';
    } else {
        echo '<img src="images/bausch_lomb_disabled.png" alt="Bausch Lomb" style="width:100%; cursor: not-allowed;">';
    }
}

function rezervni_dijelovi_access($con, $idKorisnika)
{
    $stmt = $con->prepare('SELECT rezervni_dijelovi_access FROM narudzbenica_pristup WHERE IDKorisnika =?');
    $stmt->bind_param('i', $idKorisnika);
    $stmt->execute();
    $result = $stmt->get_result();
    $allowed_access = "false";
    while ($row = mysqli_fetch_object($result)) {
        $allowed_access = $row->rezervni_dijelovi_access;
    }

    if ($allowed_access == "true") {
        echo ' <a id="parts_icon" href="parts/index.php"><img src="images/parts.svg" alt="Rezervni dijelovi" style="width:100%"><center><div class="parts_title">Rezervni dijelovi</div></center>';
    } else {
        echo '<img src="images/parts_disabled.png" alt="Rezervni dijelovi" style="width:100%; cursor: not-allowed;" /></br></br><center><div class="parts_title">Rezervni dijelovi</div></center>';
    }
}


?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex">
    <meta name="description" content="">
    <meta name="author" content="Nemanja Lazarević">
    <title>Moja Optika Stanković | e-Narudžbenica</title>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="images/favicon.ico" />
</head>
<style>
    .text {
        position: fixed;
        top: 8%;
        left: 33.5%;
        width: 100%;
    }

    .text_lenses {
        position: fixed;
        top: 41%;
        left: 33.5%;
        width: 100%;
    }


    .cards {
        position: fixed;
        top: 14%;
        left: 8%;
        width: 100%;
    }

    .cards_lenses {
        position: fixed;
        top: 47%;
        left: 18.5%;
        width: 100%;
    }

    .cards_parts {
        position: fixed;
        top: 75%;
        left: 44.9%;
        width: 90%;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 20%;
        display: inline-block;
        padding: 2px 16px;
        margin: 2px 5px;
    }

    .card1 {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 20%;
        display: inline-block;
        padding: 2px 16px;
        margin: 2px 5px;
    }

    .card_parts {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 10%;
        display: inline-block;
        padding: 2px 10px;
        margin: 4px 5px;

    }

    .card img {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .parts_title {
        margin-top: -10%;
    }
</style>

<body>
    <div class="text">
        <h1 class="h3 mb-0 text-gray-800">Izaberite proizvođača/dobavljača stakala:</h1>
    </div>
    <div class="cards">
        <div class="card">
            <?php echo moptic_access($con, $idKorisnika); ?>
        </div>
        <div class="card">
            <?php echo poloptic_access($con, $idKorisnika); ?>
        </div>
        <div class="card">
            <?php echo essilor_access($con, $idKorisnika); ?>
        </div>
        <div class="card">
            <?php echo hoya_access($con, $idKorisnika); ?>
        </div>
    </div>
    <div class="text_lenses">
        <h1 class="h3 mb-0 text-gray-800">Izaberite proizvođača kontaktnih sočiva:</h1>
    </div>
    <div class="cards_lenses">
        <div class="card1">
            <?php echo johnson_johnson_access($con, $idKorisnika); ?>
        </div>
        <div class="card1">
            <?php echo alcon_access($con, $idKorisnika); ?>
        </div>
        <div class="card1">
            <?php echo bausch_lomb_access($con, $idKorisnika); ?>
        </div>
    </div>
    <div class="cards_parts">
        <div class="card_parts">
            <?php echo rezervni_dijelovi_access($con, $idKorisnika); ?>
        </div>
    </div>

</body>

</html>