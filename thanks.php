<!DOCTYPE html>
<html lang="en"><?php include '../narudzbenica/modules/header.php'; ?>

<body id="page-top">
    <div id="wrapper">
        <?php include '../narudzbenica/modules/menu.php'; ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php
                include '../narudzbenica/modules/logout.php';
                ?>
                <div class="container-fluid">
                    <div class="thankYou">
                        <h2 style="color:#0fad00">Hvala na narudžbi</h2> </br> <img id="checkMark" src="images/green-check-icon.png"> </br></br>
                        <p style="font-size:20px;color:#5C5C5C;">Poštovani/a, Vaša narudžba je poslata veleprodaji M-Optic.</br> Za sve dodatne informacije možete nas kontaktirati putem email-a <a href="mailto:mopticvp@mojaoptika.com">mopticvp@mojaoptika.com</a></p><a id="homeButton" href="index.php" class="btn btn-success">Povratak na početnu</a> <br><br>
                    </div>
                </div>
            </div><?php include '../narudzbenica/modules/footer.php'; ?>
</body>

</html>