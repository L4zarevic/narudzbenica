<?php
function OpenCon()
{
    $dbhost = 'localhost';
    $dbuser = 'mojaopt_moptic';
    $dbpass = 'mP9!1&plTK$sE%aB8DdM';
    $db = 'mojaopt_optike';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    if (!$conn) {
        die(header("Location:../narudzbenica/login.php?msg=2"));
        exit;
    }
    return $conn;
}
function CloseCon($conn)
{
    $conn->close();
}

//Metod kojim se osvaruje konekcija sa bazom korisnika
function OpenStoreCon($dataBaseName)
{
    $dbhost = 'localhost';
    $dbuser = 'mojaopt_moptic';
    $dbpass = 'mP9!1&plTK$sE%aB8DdM';
    $db = $dataBaseName;
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    if (!$conn) {
        die(header("Location:../narudzbenica/login.php?msg=2"));
        exit;
    }
    return $conn;
}
