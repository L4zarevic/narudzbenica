<!DOCTYPE html>
<?php session_start();
if (is_null($_SESSION['prijavljen'])) {
    header('Location:login.php');
}
?>
<html lang="en">

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
            <img src="images/moptic.svg" alt="M-OPTIC" style="width:100%">
            <div class="container">
            </div>
        </div>
        <div class="card">
            <a href="poloptic/index.php"><img src="images/poloptic.svg" alt="Pol Optic" style="width:100%">
                <div class="container">
                </div>
            </a>
        </div>
        <div class="card">
            <img src="images/essilor.svg" alt="Essilor" style="width:100%">
            <div class="container">
            </div>
        </div>
        <div class="card">
            <img src="images/hoya.svg" alt="Hoya" style="width:100%">
            <div class="container">
            </div>
        </div>
    </div>

</body>

</html>