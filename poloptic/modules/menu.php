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

                <a class="collapse-item collapsed" id="transition1Collapse" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" href="#">1.50 Transition HMC <i class="fas fa-angle-down"></i></a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#transition1Collapse">
                    <a class="collapse-item" href="../poloptic/1.50_Transition_HMC_Brown.php">Brown</a>
                    <a class="collapse-item" href="../poloptic/1.50_Transition_HMC_Gray.php">Gray</a>
                    <div class="dropdown-divider"></div>
                </div>

                <a class="collapse-item" href="../poloptic/1.50_BlueTech.php">1.50 Blue Tech</a>
                <a style="word-wrap: break-word" class="collapse-item" href="../poloptic/1.50_UltraTech.php">1.50 Ultra Tech</br>(Ultra Glide)</a>
                <a class="collapse-item" href="../poloptic/1.53_Trivex_HMC.php">1.53 Trivex HMC</a>

                <a class="collapse-item collapsed" id="photocromicCollapse" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive" href="#">1.56 Photocromic HMC <i class="fas fa-angle-down"></i></a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#photocromicCollapse">
                    <a class="collapse-item" href="../poloptic/1.56_Photocromic_HMC_Brown.php">Brown</a>
                    <a class="collapse-item" href="../poloptic/1.56_Photocromic_HMC_Gray.php">Gray</a>
                    <div class="dropdown-divider"></div>
                </div>

                <a class="collapse-item" href="../poloptic/1.56_SHMC_UV420_AB.php">1.56 SHMC/UV420 AB</br>(Remove)</a>
                <a class="collapse-item" href="../poloptic/1.59_Polycarbonate_HMC.php">1.59 Polycarbonate HMC</a>
                <a class="collapse-item" href="../poloptic/1.60_HMC.php">1.60 HMC</a>
                <a class="collapse-item" href="../poloptic/1.60_UV420_AB.php">1.60 UV420 AB</a>

                <a class="collapse-item collapsed" id="transition2Collapse" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix" href="#">1.60 Transition HMC <i class="fas fa-angle-down"></i></a>
                <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#transition2Collapse">
                    <a class="collapse-item" href="../poloptic/1.60_Transition_HMC_Brown.php">Brown</a>
                    <a class="collapse-item" href="../poloptic/1.60_Transition_HMC_Gray.php">Gray</a>
                    <div class="dropdown-divider"></div>
                </div>

                <a class="collapse-item" href="../poloptic/1.67_HMC_UV420_AB.php">1.67 HMC/UV420 AB</br>(Remove)</a>
                <a class="collapse-item" href="../poloptic/1.74_AHMC.php">1.74 AHMC</a>
            </div>
        </div>

    <li class="nav-item"> <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-glasses"></i> <span>Lagerska stakla solea</span> </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="../poloptic/1.50_Solea_HC_Solea_Ultra_BackSide_Brown.php">Brown</a>
                <a class="collapse-item" href="../poloptic/1.50_Solea_HC_Solea_Ultra_BackSide_Gray.php">Gray</a>

            </div>
        </div>
        <a class="nav-link collapsed" href="../poloptic/specijala.php" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fas fa-glasses"></i> <span>Specijala</span> </a>
    </li>
    <hr class="sidebar-divider">
    <div class="text-center d-none d-md-inline"> <button class="rounded-circle border-0" id="sidebarToggle"></button> </div>
</ul>