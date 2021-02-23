<!DOCTYPE html>
<html lang="en">

<head>
    <title>M-Optic</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <link rel="icon" type="image/png" href="images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/alertify.min.css" />
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
                <form class="login100-form validate-form flex-sb flex-w" action="../narudzbenica/obrada.php" method="post"><img id="logo" src="../narudzbenica/images/MO.png"><span class="login100-form-title p-b-51">M-Optic</span>
                    <div class="wrap-input100 validate-input m-b-16"><input class="input100" type="text" name="korisnicko_ime" placeholder="Korisničko ime"><span class="focus-input100"></span></div>
                    <div class="wrap-input100 validate-input m-b-16"><input class="input100" type="password" name="lozinka" placeholder="Lozinka"><span class="focus-input100"></span></div>
                    <div class="container-login100-form-btn m-t-17"><button class="login100-form-btn" type="submit">Prijava</button><br />
                        <?php
                        if (isset($_COOKIE["cica_maca"])) {
                            echo "<br>";
                            echo "<div class='g-recaptcha' data-sitekey='6LdbyAgaAAAAAFEeuCT_lUBk2mCeuiqYv2e-mEin' style='margin-top:2%;'></div>";
                        }
                        if (isset($_REQUEST['msg'])) {
                            if ($_REQUEST['msg'] == '1') {
                                echo "<script src=\"js/alertify.min.js\"></script>";
                                echo "<script type=\"text/javascript\">alertify.error('Neuspiješno logovanje');</script>";
                            }
                            if ($_REQUEST['msg'] == '2') {
                                echo "<script src=\"js/alertify.min.js\"></script>";
                                echo "<script type=\"text/javascript\">alertify.alert('Prekid konekcije','Nije moguće ostvariti konekciju sa aplikacijom. Pokušajte ponovo da se ulogujete na Vaš korisnički nalog. Ukoliko se problem ponavlja kontaktirajte nas na info@mojaoptika.com');</script>";
                            }
                        }
                        echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname);</script>";
                        ?>
                </form>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
</body>

</html>