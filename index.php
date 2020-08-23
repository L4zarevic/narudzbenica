<!DOCTYPE html>
<html lang="en"><?php include '../narudzbenica/modules/header.php'; ?>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"> <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15"> </div>
                <div class="sidebar-brand-text mx-3">M-Optic</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active"> <a class="nav-link" href="index.php"> <i class="fas fa-fw fa-tachometer-alt"></i> <span>Početna</span></a> </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading"> Ponuda </div>
            <li class="nav-item"> <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fas fa-glasses"></i> <span>Lagerska stakla</span> </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded"> <a class="collapse-item" href="1.50_CR39_UC_HMC.php">1.50 CR39 UC/HMC</a> <a class="collapse-item" href="1.56_SHMC_UV420_AB.php">1.56 SHMC/UV420 AB</a> <a class="collapse-item" href="1.60_Transition_HMC.php">1.60 Transition HMC</a> <a class="collapse-item" href="1.56_Photocromic_HMC.php">1.56 Photocromic HMC</a> <a class="collapse-item" href="1.59_Polycarbonate_HMC.php">1.59 Polycarbonate HMC</a> <a class="collapse-item" href="1.50_Transition_HMC.php">1.50 Transition HMC</a> <a class="collapse-item" href="1.53_Trivex_HMC.php">1.53 Trivex HMC</a> <a class="collapse-item" href="1.60_HMC.php">1.60 HMC</a> <a class="collapse-item" href="1.60_UV420_AB.php">1.60 UV420 AB</a> <a class="collapse-item" href="1.67_HMC_UV420_AB.php">1.67 HMC/UV420 AB</a> </div>
                </div><a class="nav-link collapsed" href="specijala.php" d data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fas fa-glasses"></i> <span>Specijala</span> </a>
            </li>
            <hr class="sidebar-divider">
            <div class="text-center d-none d-md-inline"> <button class="rounded-circle border-0" id="sidebarToggle"></button> </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"> <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"> <i class="fa fa-bars"></i> </button>
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow"> <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ulogovani ste kao <b><?php echo $imeKorisnika; ?></b>  <i class="fas fa-user"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Odjava </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dobro došli</h1>
                    </div>
                    <div class="row">
                        <div class="">
                            <h5>Uputstvo za narudžbenicu</h5>
                            <p>Da biste kreirali željenu narudžbenicu potrebno je:</p>
                            <p>U jezičku lijevo izabrati iz ponude Lagerska stakla ili Specijala</p>
                            <p>Kod Lagerska stakla" dobićete padajuću listu sa indexima i materijalima, nakon čega je potrebno izabrati željeni index.</p>
                            <p>Da biste definisali potrebnu količinu određene dioptrije, potrebno je u polje grafikona unijeti željenu količinu, nakon čega je potrebno pritisnuti ENTER na tastaturi radi potvrde.</p>
                            <p><strong>NAPOMENA: Stavke dodavati jednu po jednu</strong></p>
                            <p>Sve željene stavke koje potvrdite nakon unosa biće prikazane u tabeli NARUDŽBENICA koja se nalazi na dnu stranice.</p>
                            <p><strong>Unesene količine za stavke u tabeli NARUDŽBENICA nije moguće uređivati.</strong></p>
                            <p>U slučaju pogrešnog unosa, stavku iz tabele je potrebno ukloniti klikom na ikonicu kantice <i class='fas fa-trash'></i>, a nakon toga izvršiti ponovni unos iz grafikona.</p>
                            <p>Nakon što kreirate narudžbenicu, potrebno je kliknuti na dugme <i class='fas fa-paper-plane'></i> POŠALJI NARUDŽBU, nakog čega će Vaša narudžbenica biti poslata veleprodaji M-Optic</p>
                            <p>Za sve dodatne informacije u vezi aplikacije možete nas kontaktirati na email: <a href="mailto:info@mojaoptika.com">info@mojaoptika.com</a></p></br>
                        </div>
                        <div class="companyInfo"> <img id="logo" src="../narudzbenica/images/MO.png">
                            <p>“M-Optic” d.o.o.</br> ul. Majevička br. 29, 76300 Bijeljina</br> <strong>Tel:</strong> +387 55 222 999, 222 990, 490 010</br> <strong>Fax:</strong> +387 55 222 998</br> <strong>Email:</strong> <a href="mailto:mopticvp@mojaoptika.com">mopticvp@mojaoptika.com</a></br> <a href="https://mojaoptika.com">www.mojaoptika.com</a></p>
                        </div>
                    </div>
                </div>
            </div><?php include '../narudzbenica/modules/footer.php'; ?>
</body>

</html>