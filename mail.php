<?php
session_start();

if (is_null($_SESSION['prijavljen'])) {
  header('Location: ../narudzbenica/login.php');
}
require_once 'connection.php';

$conn = OpenCon();

$korisnik = $_SESSION['prijavljen'];
$ar = explode("#", $korisnik, 2);
$ar[1] = rtrim($ar[1], "#");
$idKorisnika = $ar[0];
$imeKorisnika = $ar[1];

//$stavka = $_REQUEST['stavka'];


$result = mysqli_query($conn, " select * from narudzbenica ");

//var_dump($result);
 if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
  
    $header ="From: no-reply@test.com" . "\r\n";
    $to    = 'info@mojaoptika.com';
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $title  = 'Narudžbenica';

    $message = '<html><body>';
    $message .= '<br/> <p>El siguiente usuario abandono el la compra de un paquete en booking hello </p><br/>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="2">';
    $message .= "<tr><td><strong>Nombre del paquete:</strong> </td><td>" . $row["lag_spec"]."</td></tr>";
    $message .= "<tr><td><strong>Nombre del paquete:</strong> </td><td>" . $row["precio_total"]."</td></tr>";
    $message .= "<tr><td><strong>Nombre del paquete:</strong> </td><td>" . $row["nombre"]."</td></tr>";
    $message .= "<tr><td><strong>Nombre del paquete:</strong> </td><td>" . $row["apellido"]."</td></tr>";
    $message .= "<tr><td><strong>Nombre del paquete:</strong> </td><td>" . $row["email"]."</td></tr>";

    $message .= "</table>";
    $message .= "</body></html>";



    if(mail($to, $title, $message, $header)){
     echo "successful";
                die();
    }else{
        echo "false";
    }
}
 } else {
echo "0 results";
}



// $to = "somebody@example.com";
// $subject = "Narudžbenica";


// $message = "
// Narudžbenica od:' . $imeKorisnika . ' \n 
// Šifra Naziv Količina TR TRB TRPB TR2 Napomena Napomena#2 \n
// ---------------------------------------------------------
// .$stavka";


// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// $headers = "From: webmaster@example.com" . "\r\n" .
//   "CC: somebodyelse@example.com";


// $result = mail($to, $subject, $message, $headers);
// if ($result) {

//   $upit = "DELETE FROM `narudzbenica` where IDKorisnika='$idKorisnika'";
//   $rezultat = mysqli_query($conn, $upit);

//   if (!$rezultat)
//     die(mysqli_error($conn));
// } else {
//   echo "Error";
// }
