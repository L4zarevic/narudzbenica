<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"> <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15"> </div>
        <div class="sidebar-brand-text mx-3"><?php $korisnik = $_SESSION['login'];
                                                $ar = explode('#', $korisnik, 4);
                                                $ar[1] = rtrim($ar[1], '#');
                                                echo $optika = $ar[1];
                                                ?>
        </div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active"> <a class="nav-link" href="../poloptic/index.php"> <i class="fas fa-home"></i> <span>Početna</span></a> </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"> Ponuda </div>
    <li class="nav-item"> <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-glasses"></i> <span>Lagerska stakla</span> </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="../poloptic/1.50_CR39_UC_HMC.php">1.50 CR39 UC/HMC</a>
                <a class="collapse-item" href="../poloptic/1.50_Transition_HMC.php">1.50 Transition HMC</a>
                <a class="collapse-item" href="../poloptic/1.53_Trivex_HMC.php">1.53 Trivex HMC</a>
                <a class="collapse-item" href="../poloptic/1.56_Photocromic_HMC.php">1.56 Photocromic HMC</a>
                <a class="collapse-item" href="../poloptic/1.56_SHMC_UV420_AB.php">1.56 SHMC/UV420 AB</a>
                <a class="collapse-item" href="../poloptic/1.59_Polycarbonate_HMC.php">1.59 Polycarbonate HMC</a>
                <a class="collapse-item" href="../poloptic/1.60_HMC.php">1.60 HMC</a>
                <a class="collapse-item" href="../poloptic/1.60_UV420_AB.php">1.60 UV420 AB</a>
                <a class="collapse-item" href="../poloptic/1.60_Transition_HMC.php">1.60 Transition HMC</a>
                <a class="collapse-item" href="../poloptic/1.67_HMC_UV420_AB.php">1.67 HMC/UV420 AB</a>
                <a class="collapse-item" href="../poloptic/1.74_AHMC.php">1.74 AHMC</a>
            </div>
        </div>
        <a class="nav-link collapsed" href="../poloptic/lager_bifocal_progresiv.php" d data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fas fa-glasses"></i> <span>Lagerska stakla bifocali i progresivi</span> </a>
        <a class="nav-link collapsed" href="../poloptic/1.50_Solea_HC_Solea_Ultra_BackSide.php" d data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fas fa-glasses"></i> <span>Lagerska stakla solea</span> </a>
        <a class="nav-link collapsed" href="../poloptic/specijala.php" d data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fas fa-glasses"></i> <span>Specijala</span> </a>
    </li>
    <hr class="sidebar-divider">
    <div class="text-center d-none d-md-inline"> <button class="rounded-circle border-0" id="sidebarToggle"></button> </div>
</ul>