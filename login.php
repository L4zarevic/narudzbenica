<!DOCTYPE html>
<html lang="en">

<head>
    <title>Moja Optika Stanković | eNarudžbenica</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <link rel="icon" type="image/png" href="images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="../pregled/css/themes/default.min.css" />
    <link rel="stylesheet" href="css/alertify.min.css" />
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
                <form class="login100-form validate-form flex-sb flex-w" action="processing.php" method="post"><img id="logo" src="images/MOS.png"><span class="login100-form-title p-b-51"></span>
                    <div class="wrap-input100 validate-input m-b-16"><input class="input100" type="text" name="korisnicko_ime" placeholder="Korisničko ime"><span class="focus-input100"></span></div>
                    <div class="wrap-input100 validate-input m-b-16"><input class="input100" type="password" name="lozinka" placeholder="Lozinka"><span class="focus-input100"></span></div>
                    <div class="container-login100-form-btn m-t-17"><button class="login100-form-btn" type="submit">Prijava</button><br /><br />
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
                                echo "<script type=\"text/javascript\">alertify.alert('Prekid konekcije','Nije moguće ostvariti konekciju sa aplikacijom. Pokušajte ponovo da se ulogujete na Vaš korisnički nalog. Ukoliko se problem ponavlja, pišite na email: nemanja.lazarevic@mojaoptika.com');</script>";
                            }
                            if ($_REQUEST['msg'] == '3') {
                                echo "<script src=\"js/alertify.min.js\"></script>";
                                echo "<script type=\"text/javascript\">alertify.alert('Neuspiješno logovanje','Nemate ovlaštenje za pristup ovoj aplikaciji !');</script>";
                            }
                        }
                        echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname);</script>";
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <!-- „Ko traži, naći će. Ko kuca, otvoriće mu se.“ -->
</body>

</html>