<!DOCTYPE html>
<html lang="en">

<?php
include '../narudzbenica/modules/header.php';
?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">

        </div>
        <div class="sidebar-brand-text mx-3">M-Optic</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Početna</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Ponuda
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-glasses"></i>
          <span>Lagerska stakla</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!--<h6 class="collapse-header">Custom Components:</h6>-->
            <a class="collapse-item" href="1.50_CR39_UC_HMC.php">1.50 CR39 UC/HMC</a>
            <a class="collapse-item" href="1.56_SHMC_UV420_AB.php">1.56 SHMC/UV420 AB</a>
            <a class="collapse-item" href="1.60_Transition_HMC.php">1.60 Transition HMC</a>
            <a class="collapse-item" href="1.56_Photocromic_HMC.php">1.56 Photocromic HMC</a>
            <a class="collapse-item" href="1.59_Polycarbonate_HMC.php">1.59 Polycarbonate HMC</a>
            <a class="collapse-item" href="1.50_Transition_HMC.php">1.50 Transition HMC</a>
            <a class="collapse-item" href="1.53_Trivex_HMC.php">1.53 Trivex HMC</a>
            <a class="collapse-item" href="1.60_HMC.php">1.60 HMC</a>
            <a class="collapse-item" href="1.60_UV420_AB.php">1.60 UV420 AB</a>
            <a class="collapse-item" href="1.67_HMC_UV420_AB.php">1.67 HMC/UV420 AB</a>
          </div>
        </div>
        <a class="nav-link collapsed" href="specijala.php" d data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-glasses"></i>
          <span>Specijala</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">



      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>



          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ulogovani ste kao <b><?php echo $imeKorisnika; ?></b></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Odjava
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">1.67 HMC/UV420 AB</h1>

          <div class="tabela1">
            <h5 id>1.67 HMC 65mm</h5>
            <h6 id="cyl">+Cyl</h6>
            <table class="table table-bordered table-condensed10">
              <tbody>
                <tr>
                  <td class="poljeTabele">Sph+</td>
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
                  <td class="poljeTabele">6.00</td>
                  <td class='poljeTabele'><input type='text' id='1' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">5.75</td>
                  <td class='poljeTabele'><input type='text' id='2' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='3' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">5.50</td>
                  <td class='poljeTabele'><input type='text' id='4' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='5' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='6' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">5.25</td>
                  <td class='poljeTabele'><input type='text' id='7' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='8' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='9' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='10' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">5.00</td>
                  <td class='poljeTabele'><input type='text' id='11' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='12' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='13' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='14' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='15' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">4.75</td>
                  <td class='poljeTabele'><input type='text' id='16' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='17' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='18' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='19' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='20' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='21' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">4.50</td>
                  <td class='poljeTabele'><input type='text' id='22' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='23' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='24' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='25' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='26' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='27' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='28' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">4.25</td>
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
                  <td class="poljeTabele">4.00</td>
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
                  <td class="poljeTabele">3.75</td>
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
                  <td class="poljeTabele">3.50</td>
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
                  <td class="poljeTabele">3.25</td>
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
                  <td class="poljeTabele">3.00</td>
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
                  <td class="poljeTabele">2.75</td>
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
                  <td class="poljeTabele">2.50</td>
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
                  <td class="poljeTabele">2.25</td>
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
                  <td class="poljeTabele">2.00</td>
                  <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='117' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">1.75</td>
                  <td class='poljeTabele'><input type='text' id='118' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='119' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='120' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='121' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='122' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='123' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='124' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='125' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='126' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">1.50</td>
                  <td class='poljeTabele'><input type='text' id='127' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='128' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='129' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='130' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='131' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='132' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='133' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='134' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='135' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">1.25</td>
                  <td class='poljeTabele'><input type='text' id='136' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='137' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='138' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='139' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='140' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='141' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='142' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='143' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='144' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">1.00</td>
                  <td class='poljeTabele'><input type='text' id='145' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='146' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='147' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='148' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='149' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='150' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='151' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='152' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='153' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">0.75</td>
                  <td class='poljeTabele'><input type='text' id='154' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='155' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='156' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='157' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='158' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='159' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='160' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='161' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='162' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">0.50</td>
                  <td class='poljeTabele'><input type='text' id='163' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='164' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='165' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='166' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='167' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='168' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='169' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='170' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='171' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">0.25</td>
                  <td class='poljeTabele'><input type='text' id='172' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='173' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='174' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='175' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='176' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='177' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='178' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='179' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='180' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">0.00</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='181' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='182' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='183' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='184' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='185' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='186' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='187' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='188' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-0.25</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='189' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='190' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='191' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='192' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='193' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='194' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='195' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-0.50</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='196' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='197' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='198' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='199' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='200' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='201' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-0.75</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='202' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='203' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='204' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='205' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='206' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-1.00</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='207' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='208' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='209' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='210' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-1.25</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='211' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='212' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='213' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-1.50</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='214' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='215' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-1.75</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='216' class='form-control' /></td>
                </tr>

              </tbody>
            </table>
          </div>

          <div class="tabela2">
            <h5 id>1.67 HMC 70mm</h5>
            <h6 id="cyl">+Cyl</h6>
            <table class="table table-bordered table-condensed">
              <tbody>
                <tr>
                  <td class="poljeTabele">Sph+</td>
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
                  <td class="poljeTabele">0.00</td>
                  <td class='poljeTabele'><input type='text' id='217' class='form-control' /></td>
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
                  <td class="poljeTabele">-0.25</td>

                  <td class='poljeTabele'><input type='text' id='218' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='219' class='form-control' /></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-0.50</td>
                  <td class='poljeTabele'><input type='text' id='220' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='221' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='222' class='form-control' /></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-0.75</td>
                  <td class='poljeTabele'><input type='text' id='223' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='224' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='225' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='226' class='form-control' /></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-1.00</td>
                  <td class='poljeTabele'><input type='text' id='227' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='228' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='229' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='230' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='231' class='form-control' /></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-1.25</td>
                  <td class='poljeTabele'><input type='text' id='232' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='233' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='234' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='235' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='236' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='237' class='form-control' /></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-1.50</td>
                  <td class='poljeTabele'><input type='text' id='238' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='239' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='240' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='241' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='242' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='243' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='244' class='form-control' /></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-1.75</td>
                  <td class='poljeTabele'><input type='text' id='245' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='246' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='247' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='248' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='249' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='250' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='251' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='252' class='form-control' /></td>
                  <td class="poljeTabele" style='border:none;'></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-2.00</td>
                  <td class='poljeTabele'><input type='text' id='253' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='254' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='255' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='256' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='257' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='258' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='259' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='260' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='261' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-2.25</td>
                  <td class='poljeTabele'><input type='text' id='262' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='263' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='264' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='265' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='266' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='267' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='268' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='269' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='270' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-2.50</td>
                  <td class='poljeTabele'><input type='text' id='271' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='272' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='273' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='274' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='275' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='276' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='277' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='278' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='279' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-2.75</td>
                  <td class='poljeTabele'><input type='text' id='280' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='281' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='282' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='283' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='284' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='285' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='286' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='287' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='288' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-3.00</td>
                  <td class='poljeTabele'><input type='text' id='289' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='290' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='291' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='292' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='293' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='294' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='295' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='296' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='297' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-3.25</td>
                  <td class='poljeTabele'><input type='text' id='298' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='299' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='300' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='301' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='302' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='303' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='304' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='305' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='306' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-3.50</td>
                  <td class='poljeTabele'><input type='text' id='307' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='308' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='309' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='310' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='311' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='312' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='313' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='314' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='315' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-3.75</td>
                  <td class='poljeTabele'><input type='text' id='316' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='317' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='318' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='319' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='320' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='321' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='322' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='323' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='324' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-4.00</td>
                  <td class='poljeTabele'><input type='text' id='325' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='326' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='327' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='328' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='329' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='330' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='331' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='332' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='333' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-4.25</td>
                  <td class='poljeTabele'><input type='text' id='334' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='335' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='336' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='337' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='338' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='339' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='340' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='341' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='342' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-4.50</td>
                  <td class='poljeTabele'><input type='text' id='343' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='344' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='345' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='346' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='347' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='348' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='349' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='350' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='351' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-4.75</td>
                  <td class='poljeTabele'><input type='text' id='352' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='353' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='354' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='355' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='356' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='357' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='358' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='359' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='360' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-5.00</td>
                  <td class='poljeTabele'><input type='text' id='361' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='362' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='363' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='364' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='365' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='366' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='367' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='368' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='369' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-5.25</td>
                  <td class='poljeTabele'><input type='text' id='370' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='371' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='372' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='373' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='374' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='375' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='376' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='377' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='378' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-5.50</td>
                  <td class='poljeTabele'><input type='text' id='379' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='380' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='381' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='382' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='383' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='384' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='385' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='386' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='387' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-5.75</td>
                  <td class='poljeTabele'><input type='text' id='388' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='389' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='390' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='391' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='392' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='393' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='394' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='395' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='396' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-6.00</td>
                  <td class='poljeTabele'><input type='text' id='397' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='398' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='399' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='400' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='401' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='402' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='403' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='404' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='405' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-6.25</td>
                  <td class='poljeTabele'><input type='text' id='406' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='407' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='408' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='409' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='410' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='411' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='412' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='413' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='414' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-6.50</td>
                  <td class='poljeTabele'><input type='text' id='415' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='416' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='417' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='418' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='419' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='420' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='421' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='422' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='423' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-6.75</td>
                  <td class='poljeTabele'><input type='text' id='424' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='425' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='426' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='427' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='428' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='429' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='430' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='431' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='432' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-7.00</td>
                  <td class='poljeTabele'><input type='text' id='433' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='434' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='435' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='436' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='437' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='438' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='439' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='440' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='441' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-7.25</td>
                  <td class='poljeTabele'><input type='text' id='442' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='443' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='444' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='445' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='446' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='447' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='448' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='449' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='450' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-7.50</td>
                  <td class='poljeTabele'><input type='text' id='451' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='452' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='453' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='454' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='455' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='456' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='457' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='458' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='459' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">-7.75</td>
                  <td class='poljeTabele'><input type='text' id='460' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='461' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='462' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='463' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='464' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='465' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='466' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='467' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='468' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">-8.00</td>
                  <td class='poljeTabele'><input type='text' id='469' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='470' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='471' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='472' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='473' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='474' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='475' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='476' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='477' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-8.25</td>
                  <td class='poljeTabele'><input type='text' id='478' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='479' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='480' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='481' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='482' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='483' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='484' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='485' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='486' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-8.50</td>
                  <td class='poljeTabele'><input type='text' id='487' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='488' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='489' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='490' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='491' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='492' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='493' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='494' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='495' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-8.75</td>
                  <td class='poljeTabele'><input type='text' id='496' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='497' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='498' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='499' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='500' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='501' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='502' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='503' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='504' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-9.00</td>
                  <td class='poljeTabele'><input type='text' id='505' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='506' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='507' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='508' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='509' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='510' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='511' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='512' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='513' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-9.25</td>
                  <td class='poljeTabele'><input type='text' id='514' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='515' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='516' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='517' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='518' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='519' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='520' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='521' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='522' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-9.50</td>
                  <td class='poljeTabele'><input type='text' id='523' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='524' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='525' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='526' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='527' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='528' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='529' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='530' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='531' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-9.75</td>
                  <td class='poljeTabele'><input type='text' id='532' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='533' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='534' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='535' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='536' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='537' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='538' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='539' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='540' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-10.00</td>
                  <td class='poljeTabele'><input type='text' id='541' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='542' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='543' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='544' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='545' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='546' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='547' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='548' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='549' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-10.25</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='550' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='551' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='552' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='553' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='554' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='555' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='556' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='557' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-10.50</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='558' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='559' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='560' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='561' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='562' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='563' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='564' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-10.75</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='565' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='566' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='567' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='568' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='569' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='570' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-11.00</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='571' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='572' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='573' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='574' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='575' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-11.25</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='576' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='577' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='578' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='579' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-11.50</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='580' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='581' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='582' class='form-control' /></td>
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
                  <td class='poljeTabele'><input type='text' id='583' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='584' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-12.00</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='585' class='form-control' /></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- Page Heading -->

          <div class="tabela3">
            <h5 id>1.67 UV420 AB 65mm</h5>
            <h6 id="cyl">+Cyl</h6>
            <table class="table table-bordered table-condensed10">
              <tbody>
                <tr>
                  <td class="poljeTabele">Sph+</td>
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
                  <td class="poljeTabele">6.00</td>
                  <td class='poljeTabele'><input type='text' id='586' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">5.75</td>
                  <td class='poljeTabele'><input type='text' id='587' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='588' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">5.50</td>
                  <td class='poljeTabele'><input type='text' id='589' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='590' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='591' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">5.25</td>
                  <td class='poljeTabele'><input type='text' id='592' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='593' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='594' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='595' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">5.00</td>
                  <td class='poljeTabele'><input type='text' id='596' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='597' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='598' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='599' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='600' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">4.75</td>
                  <td class='poljeTabele'><input type='text' id='601' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='602' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='603' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='604' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='605' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='606' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">4.50</td>
                  <td class='poljeTabele'><input type='text' id='607' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='608' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='609' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='610' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='611' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='612' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='613' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">4.25</td>
                  <td class='poljeTabele'><input type='text' id='614' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='615' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='616' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='617' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='618' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='619' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='620' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='621' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">4.00</td>
                  <td class='poljeTabele'><input type='text' id='622' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='623' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='624' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='625' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='626' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='627' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='628' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='629' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='630' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">3.75</td>
                  <td class='poljeTabele'><input type='text' id='631' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='632' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='633' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='634' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='635' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='636' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='637' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='638' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='639' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">3.50</td>
                  <td class='poljeTabele'><input type='text' id='640' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='641' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='642' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='643' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='644' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='645' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='646' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='647' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='648' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">3.25</td>
                  <td class='poljeTabele'><input type='text' id='649' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='650' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='651' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='652' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='653' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='654' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='655' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='656' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='657' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">3.00</td>
                  <td class='poljeTabele'><input type='text' id='658' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='659' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='660' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='661' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='662' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='663' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='664' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='665' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='666' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">2.75</td>
                  <td class='poljeTabele'><input type='text' id='667' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='668' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='669' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='670' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='671' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='672' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='673' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='674' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='675' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">2.50</td>
                  <td class='poljeTabele'><input type='text' id='676' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='677' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='678' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='679' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='680' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='681' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='682' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='683' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='684' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">2.25</td>
                  <td class='poljeTabele'><input type='text' id='685' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='686' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='687' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='688' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='689' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='690' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='691' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='692' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='693' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">2.00</td>
                  <td class='poljeTabele'><input type='text' id='694' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='695' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='696' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='697' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='698' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='699' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='700' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='701' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='702' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">1.75</td>
                  <td class='poljeTabele'><input type='text' id='703' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='704' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='705' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='706' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='707' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='708' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='709' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='710' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='711' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">1.50</td>
                  <td class='poljeTabele'><input type='text' id='712' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='713' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='714' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='715' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='716' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='717' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='718' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='719' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='720' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">1.25</td>
                  <td class='poljeTabele'><input type='text' id='721' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='722' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='723' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='724' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='725' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='726' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='727' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='728' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='729' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">1.00</td>
                  <td class='poljeTabele'><input type='text' id='730' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='731' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='732' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='733' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='734' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='735' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='736' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='737' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='738' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">0.75</td>
                  <td class='poljeTabele'><input type='text' id='739' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='740' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='741' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='742' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='743' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='744' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='745' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='746' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='747' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">0.50</td>
                  <td class='poljeTabele'><input type='text' id='748' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='749' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='750' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='751' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='752' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='753' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='754' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='755' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='756' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">0.25</td>
                  <td class='poljeTabele'><input type='text' id='757' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='758' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='759' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='760' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='761' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='762' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='763' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='764' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='765' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">0.00</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='766' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='767' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='768' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='769' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='770' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='771' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='772' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='773' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-0.25</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='774' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='775' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='776' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='777' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='778' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='779' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='780' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-0.50</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='781' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='782' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='783' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='784' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='785' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='786' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-0.75</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='787' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='788' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='789' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='790' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='791' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-1.00</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='792' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='793' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='794' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='795' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-1.25</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='796' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='797' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='798' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-1.50</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='799' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='800' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-1.75</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='801' class='form-control' /></td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="tabela4">
            <h5 id>1.67 UV420 AB 70mm</h5>
            <h6 id="cyl">+Cyl</h6>
            <table class="table table-bordered table-condensed">
              <tbody>
                <tr>
                  <td class="poljeTabele">Sph+</td>
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
                  <td class="poljeTabele">0.00</td>
                  <td class='poljeTabele'><input type='text' id='802' class='form-control' /></td>
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
                  <td class="poljeTabele">-0.25</td>

                  <td class='poljeTabele'><input type='text' id='803' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='804' class='form-control' /></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-0.50</td>
                  <td class='poljeTabele'><input type='text' id='805' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='806' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='807' class='form-control' /></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-0.75</td>
                  <td class='poljeTabele'><input type='text' id='808' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='809' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='810' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='811' class='form-control' /></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-1.00</td>
                  <td class='poljeTabele'><input type='text' id='812' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='813' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='814' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='815' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='816' class='form-control' /></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-1.25</td>
                  <td class='poljeTabele'><input type='text' id='817' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='818' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='819' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='820' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='821' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='822' class='form-control' /></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-1.50</td>
                  <td class='poljeTabele'><input type='text' id='823' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='824' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='825' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='826' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='827' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='828' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='829' class='form-control' /></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-1.75</td>
                  <td class='poljeTabele'><input type='text' id='830' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='831' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='832' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='833' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='834' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='835' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='836' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='837' class='form-control' /></td>
                  <td class="poljeTabele" style='border:none;'></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-2.00</td>
                  <td class='poljeTabele'><input type='text' id='838' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='839' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='840' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='841' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='842' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='843' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='844' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='845' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='846' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-2.25</td>
                  <td class='poljeTabele'><input type='text' id='847' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='848' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='849' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='850' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='851' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='852' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='853' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='854' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='855' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-2.50</td>
                  <td class='poljeTabele'><input type='text' id='856' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='857' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='858' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='859' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='860' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='861' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='862' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='863' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='864' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-2.75</td>
                  <td class='poljeTabele'><input type='text' id='865' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='866' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='867' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='868' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='869' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='870' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='871' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='872' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='873' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-3.00</td>
                  <td class='poljeTabele'><input type='text' id='874' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='875' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='876' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='877' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='878' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='879' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='880' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='881' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='882' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-3.25</td>
                  <td class='poljeTabele'><input type='text' id='883' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='884' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='885' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='886' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='887' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='888' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='889' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='890' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='891' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-3.50</td>
                  <td class='poljeTabele'><input type='text' id='892' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='893' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='894' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='895' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='896' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='897' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='898' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='899' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='900' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-3.75</td>
                  <td class='poljeTabele'><input type='text' id='901' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='902' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='903' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='904' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='905' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='906' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='907' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='908' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='909' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-4.00</td>
                  <td class='poljeTabele'><input type='text' id='910' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='911' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='912' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='913' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='914' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='915' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='916' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='917' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='918' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-4.25</td>
                  <td class='poljeTabele'><input type='text' id='919' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='920' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='921' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='922' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='923' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='924' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='925' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='926' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='927' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-4.50</td>
                  <td class='poljeTabele'><input type='text' id='928' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='929' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='930' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='931' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='932' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='933' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='934' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='935' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='936' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-4.75</td>
                  <td class='poljeTabele'><input type='text' id='937' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='938' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='939' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='940' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='941' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='942' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='943' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='944' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='945' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-5.00</td>
                  <td class='poljeTabele'><input type='text' id='946' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='947' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='948' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='949' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='950' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='951' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='952' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='953' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='954' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-5.25</td>
                  <td class='poljeTabele'><input type='text' id='955' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='956' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='957' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='958' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='959' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='960' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='961' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='962' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='963' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-5.50</td>
                  <td class='poljeTabele'><input type='text' id='964' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='965' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='966' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='967' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='968' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='969' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='970' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='971' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='972' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-5.75</td>
                  <td class='poljeTabele'><input type='text' id='973' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='974' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='975' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='976' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='977' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='978' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='979' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='980' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='981' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-6.00</td>
                  <td class='poljeTabele'><input type='text' id='982' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='983' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='984' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='985' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='986' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='987' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='988' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='989' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='990' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-6.25</td>
                  <td class='poljeTabele'><input type='text' id='991' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='992' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='993' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='994' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='995' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='996' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='997' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='998' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='999' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-6.50</td>
                  <td class='poljeTabele'><input type='text' id='1000' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1001' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1002' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1003' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1004' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1005' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1006' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1007' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1008' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-6.75</td>
                  <td class='poljeTabele'><input type='text' id='1009' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1010' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1011' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1012' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1013' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1014' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1015' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1016' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1017' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-7.00</td>
                  <td class='poljeTabele'><input type='text' id='1018' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1019' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1020' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1021' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1022' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1023' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1024' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1025' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1026' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-7.25</td>
                  <td class='poljeTabele'><input type='text' id='1027' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1028' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1029' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1030' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1031' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1032' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1033' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1034' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1035' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-7.50</td>
                  <td class='poljeTabele'><input type='text' id='1036' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1037' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1038' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1039' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1040' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1041' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1042' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1043' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1044' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">-7.75</td>
                  <td class='poljeTabele'><input type='text' id='1045' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1046' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1047' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1048' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1049' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1050' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1051' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1052' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1053' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">-8.00</td>
                  <td class='poljeTabele'><input type='text' id='1054' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1055' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1056' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1057' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1058' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1059' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1060' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1061' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1062' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-8.25</td>
                  <td class='poljeTabele'><input type='text' id='1063' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1064' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1065' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1066' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1067' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1068' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1069' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1070' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1071' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-8.50</td>
                  <td class='poljeTabele'><input type='text' id='1072' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1073' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1074' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1075' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1076' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1077' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1078' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1079' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1080' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-8.75</td>
                  <td class='poljeTabele'><input type='text' id='1081' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1082' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1083' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1084' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1085' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1086' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1087' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1088' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1089' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-9.00</td>
                  <td class='poljeTabele'><input type='text' id='1090' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1091' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1092' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1093' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1094' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1095' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1096' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1097' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1098' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-9.25</td>
                  <td class='poljeTabele'><input type='text' id='1099' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1100' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1101' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1102' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1103' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1104' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1105' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1106' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1107' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-9.50</td>
                  <td class='poljeTabele'><input type='text' id='1108' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1109' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1110' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1111' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1112' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1113' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1114' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1115' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1116' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-9.75</td>
                  <td class='poljeTabele'><input type='text' id='1117' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1118' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1119' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1120' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1121' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1122' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1123' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1124' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1125' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-10.00</td>
                  <td class='poljeTabele'><input type='text' id='1126' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1127' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1128' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1129' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1130' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1131' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1132' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1133' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1134' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-10.25</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='1135' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1136' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1137' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1138' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1139' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1140' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1141' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1142' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-10.50</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='1143' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1144' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1145' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1146' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1147' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1148' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1149' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-10.75</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='1150' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1151' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1152' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1153' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1154' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1155' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-11.00</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='1156' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1157' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1158' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1159' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1160' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-11.25</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='1161' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1162' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1163' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1164' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-11.50</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='1165' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1166' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1167' class='form-control' /></td>
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
                  <td class='poljeTabele'><input type='text' id='1168' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='1169' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-12.00</td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class="poljeTabele" style='border:none;'></td>
                  <td class='poljeTabele'><input type='text' id='1170' class='form-control' /></td>
                </tr>
              </tbody>
            </table>
          </div>

          <h1 id="naslovNarudzbenice">Narudžbenica</h1>
          <hr>
          <?php
          include 'narudzbenicaLager.php';
          ?>
        </div>
      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?php
    include '../narudzbenica/modules/footer.php';
    ?>
    <!-- End of Footer -->

    <script type="text/javascript">
      //Funkcija za slanje podataka u tabelu naruzdbenica
      function add(inputVal) {
        $.ajax({
          type: 'POST',
          url: 'addRow.php',
          dataType: 'json',
          data: ({
            stavka: "10#" + inputVal
          }),
          success: function() {
            location.reload();
          },
          error: function() {
            location.reload();
            window.location.href = "1.67_HMC_UV420_AB.php?msg=2";
          }
        });
      }
    </script>


</body>

</html>