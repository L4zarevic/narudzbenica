<?php
session_start();

if (is_null($_SESSION['prijavljen'])) {
  header('Location: ../narudzbenica/login.php');
}


include 'connection.php';

$korisnik = $_SESSION['prijavljen'];
$ar = explode("#", $korisnik, 2);
$ar[1] = rtrim($ar[1], "#");
$idKorisnika = $ar[0];
$imeKorisnika = $ar[1];

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="noindex">
  <meta name="description" content="">
  <meta name="author" content="M-Optic">

  <title>M-Optic</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

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
          <h1 class="h3 mb-4 text-gray-800">1.53 Trivex HMC</h1>

          <div class="tabela1">
            <h5 id>1.53 Trivex HMC 65mm</h5>
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
                  <td class="poljeTabele">4.00</td>
                  <td class='poljeTabele'><input type='text' id='1' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">3.75</td>
                  <td class='poljeTabele'><input type='text' id='2' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='3' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">3.50</td>
                  <td class='poljeTabele'><input type='text' id='4' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='5' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='6' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">3.25</td>
                  <td class='poljeTabele'><input type='text' id='7' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='8' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='9' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='10' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">3.00</td>
                  <td class='poljeTabele'><input type='text' id='11' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='12' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='13' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='14' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='15' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">2.75</td>
                  <td class='poljeTabele'><input type='text' id='16' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='17' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='18' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='19' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='20' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='21' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">2.50</td>
                  <td class='poljeTabele'><input type='text' id='22' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='23' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='24' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='25' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='26' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='27' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='28' class='form-control' /></td>

                </tr>
                <tr>
                  <td class="poljeTabele">2.25</td>
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
                  <td class="poljeTabele">2.00</td>
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
                  <td class="poljeTabele">1.75</td>
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
                  <td class="poljeTabele">1.50</td>
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
                  <td class="poljeTabele">1.25</td>
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
                  <td class="poljeTabele">1.00</td>
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
                  <td class="poljeTabele">0.75</td>
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
                  <td class="poljeTabele">0.50</td>
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
                  <td class="poljeTabele">0.25</td>
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
                  <td class="poljeTabele">0.00</td>
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
              </tbody>
            </table>
          </div>

          <div class="tabela2">
            <h5 id>1.53 Trivex HMC 70mm</h5>
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
                  <td class='poljeTabele'><input type='text' id='117' class='form-control' /></td>
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
                  <td class="poljeTabele">-0.50</td>
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
                  <td class="poljeTabele">-0.75</td>
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
                  <td class="poljeTabele">-1.00</td>
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
                  <td class="poljeTabele">-1.25</td>
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
                  <td class="poljeTabele">-1.50</td>
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
                  <td class="poljeTabele">-1.75</td>
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
                  <td class="poljeTabele">-2.00</td>
                  <td class='poljeTabele'><input type='text' id='181' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='182' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='183' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='184' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='185' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='186' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='187' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='188' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='189' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-2.25</td>
                  <td class='poljeTabele'><input type='text' id='190' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='191' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='192' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='193' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='194' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='195' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='196' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='197' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='198' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-2.50</td>
                  <td class='poljeTabele'><input type='text' id='199' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='200' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='201' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='202' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='203' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='204' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='205' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='206' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='207' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-2.75</td>
                  <td class='poljeTabele'><input type='text' id='208' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='209' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='210' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='211' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='212' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='213' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='214' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='215' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='216' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-3.00</td>
                  <td class='poljeTabele'><input type='text' id='217' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='218' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='219' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='220' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='221' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='222' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='223' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='224' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='225' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-3.25</td>
                  <td class='poljeTabele'><input type='text' id='226' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='227' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='228' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='229' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='230' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='231' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='232' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='233' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='234' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-3.50</td>
                  <td class='poljeTabele'><input type='text' id='235' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='236' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='237' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='238' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='239' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='240' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='241' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='242' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='243' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-3.75</td>
                  <td class='poljeTabele'><input type='text' id='244' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='245' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='246' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='247' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='248' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='249' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='250' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='251' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='252' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">-4.00</td>
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

              </tbody>
            </table>
          </div>
        </div>

        <h1 id="naslovNarudzbenice">Narudžbenica</h2>
          <hr>
          <?php
          include 'narudzbenica.php';
          ?>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; M-Optic 2020</span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Odjava</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Izaberite "Odjava" da bi završili trenutnu sesiju.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Prekini</button>
          <a class="btn btn-primary" href="../narudzbenica/odjava.php">Odjava</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(document).on('click', '#narudzbenica tbody tr td', function() {
        $(this).parents('tbody').find('td').not(this).removeClass('active');
        alert($(this).find('strong').html());
      });
    });


    //Funckija koja uzima vrijednosti iz polja tabele narudzbenica
    function showTableData() {
      var inputValue = "";
      var table = document.getElementById('narudzbenica');
      var rowCount = table.rows.length;
      for (var r = 1, n = table.rows.length; r < n; r++) {
        for (var c = 0, m = table.rows[r].cells.length; c < m; c++) {
          inputValue = inputValue + " || " + table.rows[r].cells[c].firstChild.value;
        }
        inputValue = inputValue + "\n";
      }
      sendMail(inputValue);
    }

    //Funkcija koja salje podatke iz tabele na mejl veleprodaje
    function sendMail(inputValue) {
      $.ajax({
        type: "POST",
        url: "mail.php",
        dataType: 'json',
        data: ({
          stavka: inputValue
        }),
        success: function() {
          location.reload();
        },
        error: function() {
          location.reload();
        }
      });
    }

    function deleteRow() {
      var row = document.getElementByClass('stavkaNarudzbenice').value;

      $.ajax({
        type: "POST",
        url: "deleteRow.php",
        dataType: 'json',
        data: ({
          stavka: row
        }),
        success: function() {
          location.reload();
        },
        error: function() {
          location.reload();
        }
      });
    }

    //Funkcija koja provjerava da li je pritisnut taster Enter nakon unosa vrijednosti kolicine za odredjeno polje
    //Nakon toga se vrsi provjera ID polja i unesene vrijednosti
    //Ako je su uneseni parametri odgovarajuci,podaci se prosljedjuju funkciji add
    $(document).keypress(function(e) {
      if (e.which == 13) {
        var inputVal = 0;
        for (var i = 1; i <= 342; i++) {
          if (document.getElementById(i).value.length != 0) {
            if (document.getElementById(i).value > 0) {
              if (!isNaN(document.getElementById(i).value)) {
                inputVal = document.getElementById(i).value + "#" + i;
                add(inputVal);
              }
            }
          }
        }

        //Funkcija za slanje podataka u tabelu naruzdbenica
        function add(inputVal) {
          $.ajax({
            type: 'POST',
            url: 'dodajStavku-db7.php',
            dataType: 'json',
            data: ({
              stavka: inputVal
            }),
            success: function() {
              location.reload();
            },
            error: function() {
              location.reload();
            }
          });
        }
      }
    });
  </script>


</body>

</html>