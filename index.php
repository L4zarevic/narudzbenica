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
    $stmt = $con->prepare('SELECT moptic_access FROM korisnici WHERE ID =?');
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
        echo '<img src="images/moptic_disabled.png" alt="M-OPTIC" style="width:100%">';
    }
}

function poloptic_access($con, $idKorisnika)
{
    $stmt = $con->prepare('SELECT poloptic_access FROM korisnici WHERE ID =?');
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
        echo '<img src="images/poloptic_disabled.png" alt="Poloptic" style="width:100%">';
    }
}


function essilor_access($con, $idKorisnika)
{
    $stmt = $con->prepare('SELECT essilor_access FROM korisnici WHERE ID =?');
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
        echo '<img src="images/essilor_disabled.png" alt="Essilor" style="width:100%">';
    }
}

function hoya_access($con, $idKorisnika)
{
    $stmt = $con->prepare('SELECT hoya_access FROM korisnici WHERE ID =?');
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
        echo '<img src="images/hoya_disabled.png" alt="Hoya" style="width:100%">';
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
        top: 35%;
        left: 36%;
        width: 100%;
    }

    .cards {
        position: fixed;
        top: 45%;
        left: 8%;
        width: 100%;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 20%;
        display: inline-block;
        padding: 2px 16px;
        margin: 2px 5px;
    }

    .card img {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }
</style>

<body>
    <div class="text">
        <h1 class="h3 mb-0 text-gray-800">Izaberite proizvođača/dobavljača:</h1>
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

</body>

</html>