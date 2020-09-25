<!DOCTYPE html>
<html lang="en"><?php include '../narudzbenica/modules/header.php'; ?>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"> <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15"> </div>
                <div class="sidebar-brand-text mx-3">M-Optic</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item"> <a class="nav-link" href="index.php"> <i class="fas fa-fw fa-tachometer-alt"></i> <span>Početna</span></a> </li>
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
                        <li class="nav-item dropdown no-arrow"> <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ulogovani ste kao <b><?php echo $imeKorisnika; ?></b> <i class="fas fa-user"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Odjava </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">1.74 AHMC</h1>
                    <div class="tabela1">
                        <h5 id>1.74 AHMC 70mm</h5>
                        <h6 id="cyl">+Cyl</h6>
                        <table class="table table-bordered table-condensed">
                            <tbody>
                                <tr>
                                    <td class="poljeTabele">Sph</td>
                                    <td class="poljeTabele">0.00</td>
                                    <td class="poljeTabele">0.25</td>
                                    <td class="poljeTabele">0.50</td>
                                    <td class="poljeTabele">0.75</td>
                                    <td class="poljeTabele">1.00</td>
                                    <td class="poljeTabele">1.25</td>
                                    <td class="poljeTabele">1.50</td>
                                    <td class="poljeTabele">1.75</td>
                                    <td class="poljeTabele">2.00</td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-2.00</td>
                                    <td class='poljeTabele'><input type='text' id='1' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-2.25</td>
                                    <td class='poljeTabele'><input type='text' id='2' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='3' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-2.50</td>
                                    <td class='poljeTabele'><input type='text' id='4' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='5' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='6' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-2.75</td>
                                    <td class='poljeTabele'><input type='text' id='7' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='8' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='9' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='10' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-3.00</td>
                                    <td class='poljeTabele'><input type='text' id='11' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='12' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='13' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='14' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='15' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-3.25</td>
                                    <td class='poljeTabele'><input type='text' id='16' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='17' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='18' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='19' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='20' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='21' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-3.50</td>
                                    <td class='poljeTabele'><input type='text' id='22' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='23' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='24' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='25' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='26' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='27' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='28' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-3.75</td>
                                    <td class='poljeTabele'><input type='text' id='29' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='30' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='31' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='32' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='33' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='34' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='35' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='36' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-4.00</td>
                                    <td class='poljeTabele'><input type='text' id='37' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='38' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='39' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='40' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='41' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='42' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='43' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='44' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='45' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-4.25</td>
                                    <td class='poljeTabele'><input type='text' id='46' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='47' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='48' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='49' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='50' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='51' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='52' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='53' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='54' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-4.50</td>
                                    <td class='poljeTabele'><input type='text' id='55' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='56' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='57' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='58' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='59' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='60' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='61' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='62' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='63' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-4.75</td>
                                    <td class='poljeTabele'><input type='text' id='64' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='65' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='66' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='67' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='68' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='69' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='70' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='71' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='72' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-5.00</td>
                                    <td class='poljeTabele'><input type='text' id='73' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='74' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='75' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='76' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='77' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='78' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='79' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='80' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='81' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-5.25</td>
                                    <td class='poljeTabele'><input type='text' id='82' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='83' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='84' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='85' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='86' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='87' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='88' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='89' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='90' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-5.50</td>
                                    <td class='poljeTabele'><input type='text' id='91' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='92' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='93' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='94' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='95' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='96' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='97' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='98' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='99' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-5.75</td>
                                    <td class='poljeTabele'><input type='text' id='100' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='101' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='102' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='103' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='104' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='105' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='106' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='107' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='108' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-6.00</td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-6.25</td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-6.50</td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-6.75</td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-7.00</td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-7.25</td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-7.50</td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-7.75</td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-8.00</td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-8.25</td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-8.50</td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-8.75</td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-9.00</td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-9.25</td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-9.50</td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-9.75</td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-10.00</td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-10.25</td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-10.50</td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-10.75</td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-11.00</td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-11.25</td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-11.50</td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-11.75</td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-12.00</td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-12.25</td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-12.50</td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-12.75</td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-13.00</td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-13.25</td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-13.50</td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-13.75</td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-14.00</td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-14.25</td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-14.50</td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-14.75</td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-15.00</td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">Sph</td>
                                    <td class="poljeTabele">0.00</td>
                                    <td class="poljeTabele">0.25</td>
                                    <td class="poljeTabele">0.50</td>
                                    <td class="poljeTabele">0.75</td>
                                    <td class="poljeTabele">1.00</td>
                                    <td class="poljeTabele">1.25</td>
                                    <td class="poljeTabele">1.50</td>
                                    <td class="poljeTabele">1.75</td>
                                    <td class="poljeTabele">2.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6 id="cyl2">+Cyl</h6>
                    </div>

                    <h1 id="naslovNarudzbenice">Narudžbenica</h1>
                    <hr> <?php include 'narudzbenicaLager.php'; ?>
                </div>
            </div>
        </div><?php include '../narudzbenica/modules/footer.php'; ?><script type="text/javascript">
            function add(a) {
                $.ajax({
                    type: "POST",
                    url: "addRow.php",
                    dataType: "json",
                    data: {
                        stavka: "7#" + a
                    },
                    success: function() {
                        location.reload()
                    },
                    error: function() {
                        location.reload(), window.location.href = "1.53_Trivex_HMC.php?msg=2"
                    }
                })
            }
        </script>
</body>

</html>