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
    <li class="nav-item active"> <a class="nav-link" href="../moptic/index.php"> <i class="fas fa-home"></i> <span>Početna</span></a> </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading"> Ponuda </div>
    <li class="nav-item"> 
        <a class="nav-link collapsed" href="../moptic/lager.php" d data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fas fa-glasses"></i> <span>Lagerska stakla</span> </a>
        <a class="nav-link collapsed" href="../moptic/lager_bifocal_progresiv.php" d data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fas fa-glasses"></i> <span>Lagerska stakla bifocali i progresivi</span> </a>
    </li>
    <hr class="sidebar-divider">
    <div class="text-center d-none d-md-inline"> <button class="rounded-circle border-0" id="sidebarToggle"></button> </div>
</ul>