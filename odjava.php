<?php
session_start();
$_SESSION = array();
die(header('Location: ../narudzbenica/login.php'));
?>
