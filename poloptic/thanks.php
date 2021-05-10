<!DOCTYPE html>
<html lang="en"><?php include '../modules/header.php'; ?>

<body id="page-top">
    <div id="wrapper">
        <?php include 'modules/menu.php'; ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php
                include '../modules/logout.php';
                ?>
                <div class="container-fluid">
                    <div class="thankYou">
                        <h2 style="color:#0fad00">Narudžbina uspješna</h2> </br> <img id="checkMark" src="../images/green-check-icon.png"> </br></br>
                        <p style="font-size:20px;color:#5C5C5C;">Vaša narudžbina je uspješno poslata na email: <a href="mailto:narudzba@mojaoptika.com">narudzba@mojaoptika.com</a></p>&nbsp;&nbsp;&nbsp;&nbsp;<a id="homeButton" href="index.php" class="btn btn-success"> Idi na početnu </a> <br><br>
                    </div>
                </div>
            </div><?php include '../modules/footer.php'; ?>
</body>

</html>