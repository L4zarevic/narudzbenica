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
          <h1 class="h3 mb-4 text-gray-800">1.50 CR39 UC/HMC</h1>

          <div class="tabela1">
            <h5 id>1.50 CR39 UC 55mm</h6>
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
                    <td class="poljeTabele">8.00</td>
                    <td class="poljeTabele"><input type="text" id="1" class="form-control" /></td>

                  </tr>
                  <tr>
                    <td class="poljeTabele">7.75</td>
                    <td class="poljeTabele"><input type="text" id="2" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="3" class="form-control" /></td>

                  </tr>
                  <tr>
                    <td class="poljeTabele">7.50</td>
                    <td class="poljeTabele"><input type="text" id="4" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="5" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="6" class="form-control" /></td>

                  </tr>
                  <tr>
                    <td class="poljeTabele">7.25</td>
                    <td class="poljeTabele"><input type="text" id="7" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="8" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="9" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="10" class="form-control" /></td>

                  </tr>
                  <tr>
                    <td class="poljeTabele">7.00</td>
                    <td class="poljeTabele"><input type="text" id="11" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="12" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="13" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="14" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="15" class="form-control" /></td>

                  </tr>
                  <tr>
                    <td class="poljeTabele">6.75</td>
                    <td class="poljeTabele"><input type="text" id="16" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="17" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="18" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="19" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="20" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="21" class="form-control" /></td>

                  </tr>
                  <tr>
                    <td class="poljeTabele">6.50</td>
                    <td class="poljeTabele"><input type="text" id="22" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="23" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="24" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="25" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="26" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="27" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="28" class="form-control" /></td>

                  </tr>
                  <tr>
                    <td class="poljeTabele">6.25</td>
                    <td class="poljeTabele"><input type="text" id="29" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="30" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="31" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="32" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="33" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="34" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="35" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="36" class="form-control" /></td>

                  </tr>
                  <tr>
                    <td class="poljeTabele">6.00</td>
                    <td class="poljeTabele"><input type="text" id="37" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="38" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="39" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="40" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="41" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="42" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="43" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="44" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="45" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.75</td>
                    <td class="poljeTabele"><input type="text" id="46" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="47" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="48" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="49" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="50" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="51" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="52" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="53" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="54" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.50</td>
                    <td class="poljeTabele"><input type="text" id="55" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="56" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="57" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="58" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="59" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="60" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="61" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="62" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="63" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.25</td>
                    <td class="poljeTabele"><input type="text" id="64" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="65" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="66" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="67" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="68" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="69" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="70" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="71" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="72" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.00</td>
                    <td class="poljeTabele"><input type="text" id="73" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="74" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="75" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="76" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="77" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="78" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="79" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="80" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="81" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">4.75</td>
                    <td class="poljeTabele"><input type="text" id="82" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="83" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="84" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="85" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="86" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="87" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="88" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="89" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="90" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">4.50</td>
                    <td class="poljeTabele"><input type="text" id="91" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="92" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="93" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="94" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="95" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="96" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="97" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="98" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="99" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">4.25</td>
                    <td class="poljeTabele"><input type="text" id="100" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="101" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="102" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="103" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="104" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="105" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="106" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="107" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="108" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">4.00</td>
                    <td class="poljeTabele"><input type="text" id="109" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="110" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="111" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="112" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="113" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="114" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="115" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="116" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="117" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">3.75</td>
                    <td class="poljeTabele"><input type="text" id="118" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="119" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="120" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="121" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="122" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="123" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="124" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="125" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="126" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">3.50</td>
                    <td class="poljeTabele"><input type="text" id="127" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="128" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="129" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="130" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="131" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="132" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="133" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="134" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="135" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">3.25</td>
                    <td class="poljeTabele"><input type="text" id="136" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="137" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="138" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="139" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="140" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="141" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="142" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="143" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="144" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">3.00</td>
                    <td class="poljeTabele"><input type="text" id="145" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="146" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="147" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="148" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="149" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="150" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="151" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="152" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="153" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">2.75</td>
                    <td class="poljeTabele"><input type="text" id="154" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="155" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="156" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="157" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="158" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="159" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="160" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="161" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="162" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">2.50</td>
                    <td class="poljeTabele"><input type="text" id="163" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="164" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="165" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="166" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="167" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="168" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="169" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="170" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="171" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">2.25</td>
                    <td class="poljeTabele"><input type="text" id="172" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="173" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="174" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="175" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="176" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="177" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="178" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="179" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="180" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">2.00</td>
                    <td class="poljeTabele"><input type="text" id="181" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="182" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="183" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="184" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="185" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="186" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="187" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="188" class="form-control" /></td>
                    <td class="poljeTabele"><input type="text" id="189" class="form-control" /></td>
                  </tr>
                </tbody>
              </table>
          </div>

          <div class="tabela2">
            <h5 id>1.50 CR39 HMC 55mm</h6>
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
                    <td class="poljeTabele">8.00</td>
                    <td class='poljeTabele'><input type='text' id='190' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">7.75</td>
                    <td class='poljeTabele'><input type='text' id='191' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='192' class='form-control' /></td>

                  </tr>
                  <tr>
                    <td class="poljeTabele">7.50</td>
                    <td class='poljeTabele'><input type='text' id='193' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='194' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='195' class='form-control' /></td>

                  </tr>
                  <tr>
                    <td class="poljeTabele">7.25</td>
                    <td class='poljeTabele'><input type='text' id='196' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='197' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='198' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='199' class='form-control' /></td>

                  </tr>
                  <tr>
                    <td class="poljeTabele">7.00</td>
                    <td class='poljeTabele'><input type='text' id='200' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='201' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='202' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='203' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='204' class='form-control' /></td>

                  </tr>
                  <tr>
                    <td class="poljeTabele">6.75</td>
                    <td class='poljeTabele'><input type='text' id='205' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='206' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='207' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='208' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='209' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='210' class='form-control' /></td>

                  </tr>
                  <tr>
                    <td class="poljeTabele">6.50</td>
                    <td class='poljeTabele'><input type='text' id='211' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='212' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='213' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='214' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='215' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='216' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='217' class='form-control' /></td>

                  </tr>
                  <tr>
                    <td class="poljeTabele">6.25</td>
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
                    <td class="poljeTabele">6.00</td>
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
                    <td class="poljeTabele">5.75</td>
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
                    <td class="poljeTabele">5.50</td>
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
                    <td class="poljeTabele">5.25</td>
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
                    <td class="poljeTabele">5.00</td>
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
                    <td class="poljeTabele">4.75</td>
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
                    <td class="poljeTabele">4.50</td>
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
                    <td class="poljeTabele">4.25</td>
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
                    <td class="poljeTabele">4.00</td>
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
                    <td class="poljeTabele">3.75</td>
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
                    <td class="poljeTabele">3.50</td>
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
                    <td class="poljeTabele">3.25</td>
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
                    <td class="poljeTabele">3.00</td>
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
                    <td class="poljeTabele">2.75</td>
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
                    <td class="poljeTabele">2.50</td>
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
                    <td class="poljeTabele">2.25</td>
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
                    <td class="poljeTabele">2.00</td>
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
                </tbody>
              </table>
          </div>

          <!-- Tabela 3 -->
          <div class="tabela3">
            <h5 id>1.50 CR39 UC 60mm</h6>
              <h6 id="cyl">+Cyl</h6>
              <table class="table table-bordered table-condensed3">
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
                    <td class="poljeTabele">8.00</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">7.75</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">7.50</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">7.25</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">7.00</td>
                    <td class='poljeTabele'><input type='text' id='379' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">6.75</td>
                    <td class='poljeTabele'><input type='text' id='380' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='381' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">6.50</td>
                    <td class='poljeTabele'><input type='text' id='382' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='383' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='384' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">6.25</td>
                    <td class='poljeTabele'><input type='text' id='385' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='386' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='387' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='388' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">6.00</td>
                    <td class='poljeTabele'><input type='text' id='389' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='390' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='391' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='392' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='393' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.75</td>
                    <td class='poljeTabele'><input type='text' id='394' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='395' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='396' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='397' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='398' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='399' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.50</td>
                    <td class='poljeTabele'><input type='text' id='400' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='401' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='402' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='403' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='404' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='405' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='406' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.25</td>
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
                    <td class="poljeTabele">5.00</td>
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
                    <td class="poljeTabele">4.75</td>
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
                    <td class="poljeTabele">4.50</td>
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
                    <td class="poljeTabele">4.25</td>
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
                    <td class="poljeTabele">4.00</td>
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
                    <td class="poljeTabele">3.75</td>
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
                    <td class="poljeTabele">3.50</td>
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
                    <td class="poljeTabele">3.25</td>
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
                    <td class="poljeTabele">3.00</td>
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
                    <td class="poljeTabele">2.75</td>
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
                    <td class="poljeTabele">2.50</td>
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
                    <td class="poljeTabele">2.25</td>
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
                    <td class="poljeTabele">2.00</td>
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
                    <td class="poljeTabele">1.75</td>
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
                    <td class="poljeTabele">1.50</td>
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
                </tbody>
              </table>
          </div>

          <!-- Tabela 4 -->
          <div class="tabela4">
            <h5>1.50 CR39 HMC 60mm</h6>
              <h6 id="cyl">+Cyl</h6>
              <table class="table table-bordered table-condensed4">
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
                    <td class="poljeTabele">8.00</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">7.75</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">7.50</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">7.25</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">7.00</td>
                    <td class='poljeTabele'><input type='text' id='550' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">6.75</td>
                    <td class='poljeTabele'><input type='text' id='551' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='552' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">6.50</td>
                    <td class='poljeTabele'><input type='text' id='553' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='554' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='555' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">6.25</td>
                    <td class='poljeTabele'><input type='text' id='556' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='557' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='558' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='559' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">6.00</td>
                    <td class='poljeTabele'><input type='text' id='560' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='561' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='562' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='563' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='564' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.75</td>
                    <td class='poljeTabele'><input type='text' id='565' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='566' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='567' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='568' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='569' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='570' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.50</td>
                    <td class='poljeTabele'><input type='text' id='571' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='572' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='573' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='574' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='575' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='576' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='577' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.25</td>
                    <td class='poljeTabele'><input type='text' id='578' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='579' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='580' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='581' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='582' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='583' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='584' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='585' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.00</td>
                    <td class='poljeTabele'><input type='text' id='586' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='587' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='588' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='589' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='590' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='591' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='592' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='593' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='594' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">4.75</td>
                    <td class='poljeTabele'><input type='text' id='595' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='596' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='597' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='598' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='599' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='600' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='601' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='602' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='603' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">4.50</td>
                    <td class='poljeTabele'><input type='text' id='604' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='605' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='606' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='607' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='608' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='609' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='610' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='611' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='612' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">4.25</td>
                    <td class='poljeTabele'><input type='text' id='613' class='form-control' /></td>
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
                </tbody>
              </table>
          </div>


          <!-- Tabela 5 -->
          <div class="tabela5">
            <h5>1.50 CR39 UC 65mm</h6>
              <h6 id="cyl">+Cyl</h6>
              <table class="table table-bordered table-condensed5">
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
                    <td class="poljeTabele">2.25</td>
                    <td class="poljeTabele">2.50</td>
                    <td class="poljeTabele">2.75</td>
                    <td class="poljeTabele">3.00</td>
                    <td class="poljeTabele">3.25</td>
                    <td class="poljeTabele">3.50</td>
                    <td class="poljeTabele">3.75</td>
                    <td class="poljeTabele">4.00</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">7.00</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">6.75</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">6.50</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">6.25</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">6.00</td>
                    <td class='poljeTabele'><input type='text' id='721' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.75</td>
                    <td class='poljeTabele'><input type='text' id='722' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='723' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.50</td>
                    <td class='poljeTabele'><input type='text' id='724' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='725' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='726' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.25</td>
                    <td class='poljeTabele'><input type='text' id='727' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='728' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='729' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='730' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.00</td>
                    <td class='poljeTabele'><input type='text' id='731' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='732' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='733' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='734' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='735' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">4.75</td>
                    <td class='poljeTabele'><input type='text' id='736' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='737' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='738' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='739' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='740' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='741' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">4.50</td>
                    <td class='poljeTabele'><input type='text' id='742' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='743' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='744' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='745' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='746' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='747' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='748' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">4.25</td>
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
                    <td class="poljeTabele">4.00</td>
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
                    <td class="poljeTabele">3.75</td>
                    <td class='poljeTabele'><input type='text' id='766' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='767' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='768' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='769' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='770' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='771' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='772' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='773' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='774' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='775' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">3.50</td>
                    <td class='poljeTabele'><input type='text' id='776' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='777' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='778' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='779' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='780' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='781' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='782' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='783' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='784' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='785' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='786' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">3.25</td>
                    <td class='poljeTabele'><input type='text' id='787' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='788' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='789' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='790' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='791' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='792' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='793' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='794' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='795' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='796' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='797' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='798' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">3.00</td>
                    <td class='poljeTabele'><input type='text' id='799' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='800' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='801' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='802' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='803' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='804' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='805' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='806' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='807' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='808' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='809' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='810' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='811' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">2.75</td>
                    <td class='poljeTabele'><input type='text' id='812' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='813' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='814' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='815' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='816' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='817' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='818' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='819' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='820' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='821' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='822' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='823' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='824' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='825' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">2.50</td>
                    <td class='poljeTabele'><input type='text' id='826' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='827' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='828' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='829' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='830' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='831' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='832' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='833' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='834' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='835' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='836' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='837' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='838' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='839' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='840' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">2.25</td>
                    <td class='poljeTabele'><input type='text' id='841' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='842' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='843' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='844' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='845' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='846' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='847' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='848' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='849' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='850' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='851' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='852' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='853' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='854' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='855' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='856' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">2.00</td>
                    <td class='poljeTabele'><input type='text' id='857' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='858' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='859' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='860' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='861' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='862' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='863' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='864' class='form-control' /></td>
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
                    <td class="poljeTabele">1.75</td>
                    <td class='poljeTabele'><input type='text' id='874' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='875' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='876' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='877' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='878' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='879' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='880' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='881' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='882' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='883' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='884' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='885' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='886' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='887' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='888' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='889' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='890' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">1.50</td>
                    <td class='poljeTabele'><input type='text' id='891' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='892' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='893' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='894' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='895' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='896' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='897' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='898' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='899' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='900' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='901' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='902' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='903' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='904' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='905' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='906' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='907' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">1.25</td>
                    <td class='poljeTabele'><input type='text' id='908' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='909' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='910' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='911' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='912' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='913' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='914' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='915' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='916' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='917' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='918' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='919' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='920' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='921' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='922' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='923' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='924' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">1.00</td>
                    <td class='poljeTabele'><input type='text' id='925' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='926' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='927' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='928' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='929' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='930' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='931' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='932' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='933' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='934' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='935' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='936' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='937' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='938' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='939' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='940' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='941' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">0.75</td>
                    <td class='poljeTabele'><input type='text' id='942' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='943' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='944' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='945' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='946' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='947' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='948' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='949' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='950' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='951' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='952' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='953' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='954' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='955' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='956' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='957' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='958' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">0.50</td>
                    <td class='poljeTabele'><input type='text' id='959' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='960' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='961' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='962' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='963' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='964' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='965' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='966' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='967' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='968' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='969' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='970' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='971' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='972' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='973' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='974' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='975' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">0.25</td>
                    <td class='poljeTabele'><input type='text' id='976' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='977' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='978' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='979' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='980' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='981' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='982' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='983' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='984' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='985' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='986' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='987' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='988' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='989' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='990' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='991' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='992' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">0.00</td>
                    <td class='poljeTabele'><input type='text' id='993' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='994' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='995' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='996' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='997' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='998' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='999' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1000' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1001' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1002' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1003' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1004' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1005' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1006' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1007' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1008' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1009' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-0.25</td>
                    <td class='poljeTabele'><input type='text' id='1010' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1011' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1012' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1013' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1014' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1015' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1016' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1017' class='form-control' /></td>
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
                    <td class="poljeTabele">-0.50</td>
                    <td class='poljeTabele'><input type='text' id='1027' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1028' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1029' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1030' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1031' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1032' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1033' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1034' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1035' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1036' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1037' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1038' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1039' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1040' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1041' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1042' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1043' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-0.75</td>
                    <td class='poljeTabele'><input type='text' id='1044' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1045' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1046' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1047' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1048' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1049' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1050' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1051' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1052' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1053' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1054' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1055' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1056' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1057' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1058' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1059' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1060' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-1.00</td>
                    <td class='poljeTabele'><input type='text' id='1061' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1062' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1063' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1064' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1065' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1066' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1067' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1068' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1069' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1070' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1071' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1072' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1073' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1074' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1075' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1076' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1077' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-1.25</td>
                    <td class='poljeTabele'><input type='text' id='1078' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1079' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1080' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1081' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1082' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1083' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1084' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1085' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1086' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1087' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1088' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1089' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1090' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1091' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1092' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1093' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1094' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-1.50</td>
                    <td class='poljeTabele'><input type='text' id='1095' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1096' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1097' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1098' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1099' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1100' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1101' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1102' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1103' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1104' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1105' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1106' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1107' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1108' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1109' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1110' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1111' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-1.75</td>
                    <td class='poljeTabele'><input type='text' id='1112' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1113' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1114' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1115' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1116' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1117' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1118' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1119' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1120' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1121' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1122' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1123' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1124' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1125' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1126' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1127' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1128' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-2.00</td>
                    <td class='poljeTabele'><input type='text' id='1129' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1130' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1131' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1132' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1133' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1134' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1135' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1136' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1137' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1138' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1139' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1140' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1141' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1142' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1143' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1144' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1145' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-2.25</td>
                    <td class='poljeTabele'><input type='text' id='1146' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1147' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1148' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1149' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1150' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1151' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1152' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1153' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1154' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1155' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1156' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1157' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1158' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1159' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1160' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1161' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1162' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-2.50</td>
                    <td class='poljeTabele'><input type='text' id='1163' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1164' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1165' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1166' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1167' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1168' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1169' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1170' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1171' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1172' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1173' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1174' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1175' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1176' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1177' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1178' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1179' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-2.75</td>
                    <td class='poljeTabele'><input type='text' id='1180' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1181' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1182' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1183' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1184' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1185' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1186' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1187' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1188' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1189' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1190' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1191' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1192' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1193' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1194' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1195' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1196' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-3.00</td>
                    <td class='poljeTabele'><input type='text' id='1197' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1198' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1199' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1200' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1201' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1202' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1203' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1204' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1205' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1206' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1207' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1208' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1209' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1210' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1211' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1212' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1213' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-3.25</td>
                    <td class='poljeTabele'><input type='text' id='1214' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1215' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1216' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1217' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1218' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1219' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1220' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1221' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1222' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1223' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1224' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1225' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1226' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1227' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1228' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1229' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1230' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-3.50</td>
                    <td class='poljeTabele'><input type='text' id='1231' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1232' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1233' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1234' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1235' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1236' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1237' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1238' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1239' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1240' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1241' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1242' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1243' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1244' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1245' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1246' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1247' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-3.75</td>
                    <td class='poljeTabele'><input type='text' id='1248' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1249' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1250' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1251' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1252' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1253' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1254' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1255' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1256' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1257' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1258' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1259' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1260' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1261' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1262' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1263' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1264' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-4.00</td>
                    <td class='poljeTabele'><input type='text' id='1265' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1266' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1267' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1268' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1269' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1270' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1271' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1272' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1273' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1274' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1275' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1276' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1277' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1278' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1279' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1280' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1281' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-4.25</td>
                    <td class='poljeTabele'><input type='text' id='1282' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1283' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1284' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1285' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1286' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1287' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1288' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1289' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1290' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1291' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1292' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1293' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1294' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1295' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1296' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1297' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1298' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-4.50</td>
                    <td class='poljeTabele'><input type='text' id='1299' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1300' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1301' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1302' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1303' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1304' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1305' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1306' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1307' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1308' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1309' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1310' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1311' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1312' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1313' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1314' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1315' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-4.75</td>
                    <td class='poljeTabele'><input type='text' id='1316' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1317' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1318' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1319' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1320' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1321' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1322' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1323' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1324' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1325' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1326' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1327' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1328' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1329' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1330' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1331' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1332' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-5.00</td>
                    <td class='poljeTabele'><input type='text' id='1333' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1334' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1335' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1336' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1337' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1338' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1339' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1340' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1341' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1342' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1343' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1344' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1345' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1346' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1347' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1348' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1349' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-5.25</td>
                    <td class='poljeTabele'><input type='text' id='1350' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1351' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1352' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1353' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1354' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1355' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1356' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1357' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1358' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1359' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1360' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1361' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1362' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1363' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1364' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1365' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1366' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-5.50</td>
                    <td class='poljeTabele'><input type='text' id='1367' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1368' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1369' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1370' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1371' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1372' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1373' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1374' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1375' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1376' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1377' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1378' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1379' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1380' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1381' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1382' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1383' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-5.75</td>
                    <td class='poljeTabele'><input type='text' id='1384' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1385' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1386' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1387' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1388' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1389' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1390' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1391' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1392' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1393' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1394' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1395' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1396' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1397' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1398' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1399' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1400' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-6.00</td>
                    <td class='poljeTabele'><input type='text' id='1401' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1402' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1403' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1404' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1405' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1406' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1407' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1408' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1409' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1410' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1411' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1412' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1413' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1414' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1415' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1416' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1417' class='form-control' /></td>
                  </tr>
                </tbody>
              </table>
          </div>

          <!-- Tabela 6 -->
          <div class="tabela6">
            <h5>1.50 CR39 HMC 65mm</h6>
              <h6 id="cyl">+Cyl</h6>
              <table class="table table-bordered table-condensed6">
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
                    <td class="poljeTabele">2.25</td>
                    <td class="poljeTabele">2.50</td>
                    <td class="poljeTabele">2.75</td>
                    <td class="poljeTabele">3.00</td>
                    <td class="poljeTabele">3.25</td>
                    <td class="poljeTabele">3.50</td>
                    <td class="poljeTabele">3.75</td>
                    <td class="poljeTabele">4.00</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">7.00</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">6.75</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">6.50</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">6.25</td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">6.00</td>
                    <td class='poljeTabele'><input type='text' id='1418' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.75</td>
                    <td class='poljeTabele'><input type='text' id='1419' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1420' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.50</td>
                    <td class='poljeTabele'><input type='text' id='1421' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1422' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1423' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.25</td>
                    <td class='poljeTabele'><input type='text' id='1424' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1425' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1426' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1427' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">5.00</td>
                    <td class='poljeTabele'><input type='text' id='1428' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1429' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1430' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1431' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1432' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">4.75</td>
                    <td class='poljeTabele'><input type='text' id='1433' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1434' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1435' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1436' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1437' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1438' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">4.50</td>
                    <td class='poljeTabele'><input type='text' id='1439' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1440' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1441' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1442' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1443' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1444' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1445' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">4.25</td>
                    <td class='poljeTabele'><input type='text' id='1446' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1447' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1448' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1449' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1450' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1451' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1452' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1453' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">4.00</td>
                    <td class='poljeTabele'><input type='text' id='1454' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1455' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1456' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1457' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1458' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1459' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1460' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1461' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1462' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">3.75</td>
                    <td class='poljeTabele'><input type='text' id='1463' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1464' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1465' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1466' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1467' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1468' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1469' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1470' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1471' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1472' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">3.50</td>
                    <td class='poljeTabele'><input type='text' id='1473' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1474' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1475' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1476' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1477' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1478' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1479' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1480' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1481' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1482' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1483' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">3.25</td>
                    <td class='poljeTabele'><input type='text' id='1484' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1485' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1486' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1487' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1488' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1489' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1490' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1491' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1492' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1493' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1494' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1495' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">3.00</td>
                    <td class='poljeTabele'><input type='text' id='1496' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1497' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1498' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1499' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1500' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1501' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1502' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1503' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1504' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1505' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1506' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1507' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1508' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">2.75</td>
                    <td class='poljeTabele'><input type='text' id='1509' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1510' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1511' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1512' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1513' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1514' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1515' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1516' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1517' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1518' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1519' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1520' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1521' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1522' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">2.50</td>
                    <td class='poljeTabele'><input type='text' id='1523' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1524' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1525' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1526' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1527' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1528' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1529' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1530' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1531' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1532' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1533' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1534' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1535' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1536' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1537' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">2.25</td>
                    <td class='poljeTabele'><input type='text' id='1538' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1539' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1540' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1541' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1542' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1543' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1544' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1545' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1546' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1547' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1548' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1549' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1550' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1551' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1552' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1553' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">2.00</td>
                    <td class='poljeTabele'><input type='text' id='1554' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1555' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1556' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1557' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1558' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1559' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1560' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1561' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1562' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1563' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1564' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1565' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1566' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1567' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1568' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1569' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1570' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">1.75</td>
                    <td class='poljeTabele'><input type='text' id='1571' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1572' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1573' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1574' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1575' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1576' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1577' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1578' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1579' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1580' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1581' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1582' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1583' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1584' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1585' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1586' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1587' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">1.50</td>
                    <td class='poljeTabele'><input type='text' id='1588' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1589' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1590' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1591' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1592' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1593' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1594' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1595' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1596' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1597' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1598' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1599' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1600' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1601' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1602' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1603' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1604' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">1.25</td>
                    <td class='poljeTabele'><input type='text' id='1605' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1606' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1607' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1608' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1609' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1610' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1611' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1612' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1613' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1614' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1615' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1616' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1617' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1618' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1619' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1620' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1621' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">1.00</td>
                    <td class='poljeTabele'><input type='text' id='1622' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1623' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1624' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1625' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1626' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1627' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1628' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1629' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1630' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1631' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1632' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1633' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1634' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1635' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1636' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1637' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1638' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">0.75</td>
                    <td class='poljeTabele'><input type='text' id='1639' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1640' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1641' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1642' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1643' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1644' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1645' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1646' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1647' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1648' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1649' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1650' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1651' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1652' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1653' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1654' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1655' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">0.50</td>
                    <td class='poljeTabele'><input type='text' id='1656' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1657' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1658' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1659' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1660' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1661' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1662' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1663' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1664' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1665' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1666' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1667' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1668' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1669' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1670' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1671' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1672' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">0.25</td>
                    <td class='poljeTabele'><input type='text' id='1673' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1674' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1675' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1676' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1677' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1678' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1679' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1680' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1681' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1682' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1683' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1684' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1685' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1686' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1687' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1688' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1689' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">0.00</td>
                    <td class='poljeTabele'><input type='text' id='1690' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1691' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1692' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1693' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1694' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1695' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1696' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1697' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1698' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1699' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1700' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1701' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1702' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1703' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1704' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1705' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1706' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-0.25</td>
                    <td class='poljeTabele'><input type='text' id='1707' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1708' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1709' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1710' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1711' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1712' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1713' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1714' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1715' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1716' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1717' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1718' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1719' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1720' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1721' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1722' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1723' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-0.50</td>
                    <td class='poljeTabele'><input type='text' id='1724' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1725' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1726' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1727' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1728' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1729' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1730' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1731' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1732' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1733' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1734' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1735' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1736' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1737' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1738' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1739' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1740' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-0.75</td>
                    <td class='poljeTabele'><input type='text' id='1741' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1742' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1743' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1744' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1745' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1746' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1747' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1748' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1749' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1750' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1751' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1752' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1753' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1754' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1755' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1756' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1757' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-1.00</td>
                    <td class='poljeTabele'><input type='text' id='1758' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1759' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1760' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1761' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1762' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1763' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1764' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1765' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1766' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1767' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1768' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1769' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1770' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1771' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1772' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1773' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1774' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-1.25</td>
                    <td class='poljeTabele'><input type='text' id='1775' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1776' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1777' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1778' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1779' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1780' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1781' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1782' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1783' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1784' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1785' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1786' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1787' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1788' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1789' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1790' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1791' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-1.50</td>
                    <td class='poljeTabele'><input type='text' id='1792' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1793' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1794' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1795' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1796' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1797' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1798' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1799' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1800' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1801' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1802' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1803' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1804' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1805' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1806' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1807' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1808' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-1.75</td>
                    <td class='poljeTabele'><input type='text' id='1809' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1810' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1811' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1812' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1813' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1814' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1815' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1816' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1817' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1818' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1819' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1820' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1821' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1822' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1823' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1824' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1825' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-2.00</td>
                    <td class='poljeTabele'><input type='text' id='1826' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1827' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1828' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1829' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1830' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1831' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1832' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1833' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1834' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1835' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1836' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1837' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1838' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1839' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1840' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1841' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1842' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-2.25</td>
                    <td class='poljeTabele'><input type='text' id='1843' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1844' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1845' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1846' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1847' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1848' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1849' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1850' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1851' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1852' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1853' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1854' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1855' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1856' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1857' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1858' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1859' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-2.50</td>
                    <td class='poljeTabele'><input type='text' id='1860' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1861' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1862' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1863' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1864' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1865' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1866' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1867' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1868' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1869' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1870' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1871' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1872' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1873' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1874' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1875' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1876' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-2.75</td>
                    <td class='poljeTabele'><input type='text' id='1877' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1878' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1879' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1880' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1881' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1882' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1883' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1884' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1885' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1886' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1887' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1888' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1889' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1890' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1891' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1892' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1893' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-3.00</td>
                    <td class='poljeTabele'><input type='text' id='1894' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1895' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1896' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1897' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1898' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1899' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1900' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1901' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1902' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1903' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1904' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1905' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1906' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1907' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1908' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1909' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1910' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-3.25</td>
                    <td class='poljeTabele'><input type='text' id='1911' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1912' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1913' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1914' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1915' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1916' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1917' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1918' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1919' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1920' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1921' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1922' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1923' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1924' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1925' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1926' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1927' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-3.50</td>
                    <td class='poljeTabele'><input type='text' id='1928' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1929' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1930' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1931' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1932' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1933' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1934' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1935' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1936' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1937' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1938' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1939' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1940' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1941' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1942' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1943' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1944' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-3.75</td>
                    <td class='poljeTabele'><input type='text' id='1945' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1946' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1947' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1948' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1949' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1950' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1951' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1952' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1953' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1954' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1955' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1956' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1957' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1958' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1959' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1960' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1961' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-4.00</td>
                    <td class='poljeTabele'><input type='text' id='1962' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1963' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1964' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1965' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1966' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1967' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1968' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1969' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1970' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1971' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1972' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1973' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1974' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1975' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1976' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1977' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1978' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-4.25</td>
                    <td class='poljeTabele'><input type='text' id='1979' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1980' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1981' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1982' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1983' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1984' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1985' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1986' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1987' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1988' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1989' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1990' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1991' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1992' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1993' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1994' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1995' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-4.50</td>
                    <td class='poljeTabele'><input type='text' id='1996' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1997' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1998' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='1999' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2000' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2001' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2002' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2003' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2004' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2005' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2006' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2007' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2008' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2009' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2010' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2011' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2012' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-4.75</td>
                    <td class='poljeTabele'><input type='text' id='2013' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2014' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2015' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2016' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2017' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2018' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2019' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2020' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2021' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2022' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2023' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2024' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2025' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2026' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2027' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2028' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2029' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-5.00</td>
                    <td class='poljeTabele'><input type='text' id='2030' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2031' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2032' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2033' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2034' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2035' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2036' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2037' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2038' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2039' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2040' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2041' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2042' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2043' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2044' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2045' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2046' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-5.25</td>
                    <td class='poljeTabele'><input type='text' id='2047' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2048' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2049' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2050' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2051' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2052' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2053' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2054' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2055' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2056' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2057' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2058' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2059' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2060' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2061' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2062' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2063' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-5.50</td>
                    <td class='poljeTabele'><input type='text' id='2064' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2065' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2066' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2067' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2068' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2069' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2070' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2071' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2072' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2073' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2074' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2075' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2076' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2077' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2078' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2079' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2080' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-5.75</td>
                    <td class='poljeTabele'><input type='text' id='2081' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2082' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2083' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2084' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2085' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2086' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2087' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2088' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2089' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2090' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2091' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2092' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2093' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2094' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2095' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2096' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2097' class='form-control' /></td>
                  </tr>
                  <tr>
                    <td class="poljeTabele">-6.00</td>
                    <td class='poljeTabele'><input type='text' id='2098' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2099' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2100' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2101' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2102' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2103' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2104' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2105' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2106' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2107' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2108' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2109' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2110' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2111' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2112' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2113' class='form-control' /></td>
                    <td class='poljeTabele'><input type='text' id='2114' class='form-control' /></td>
                  </tr>
                </tbody>
              </table>
          </div>

          <!-- Tabela 7 -->
          <div class="tabela7">
            <h5>1.50 CR39 UC 70mm</h5>
            <h6 id="cyl">+Cyl</h6>
            <table class="table table-bordered table-condensed7">
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
                  <td class='poljeTabele'><input type='text' id='2115' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">5.75</td>
                  <td class='poljeTabele'><input type='text' id='2116' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">5.50</td>
                  <td class='poljeTabele'><input type='text' id='2117' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">5.25</td>
                  <td class='poljeTabele'><input type='text' id='2118' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">5.00</td>
                  <td class='poljeTabele'><input type='text' id='2119' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">4.75</td>
                  <td class='poljeTabele'><input type='text' id='2120' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">4.50</td>
                  <td class='poljeTabele'><input type='text' id='2121' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">4.25</td>
                  <td class='poljeTabele'><input type='text' id='2122' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">4.00</td>
                  <td class='poljeTabele'><input type='text' id='2123' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">3.75</td>
                  <td class='poljeTabele'><input type='text' id='2124' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2125' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">3.50</td>
                  <td class='poljeTabele'><input type='text' id='2126' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2127' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2128' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">3.25</td>
                  <td class='poljeTabele'><input type='text' id='2129' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2130' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2131' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2132' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">3.00</td>
                  <td class='poljeTabele'><input type='text' id='2133' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2134' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2135' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2136' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2137' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">2.75</td>
                  <td class='poljeTabele'><input type='text' id='2138' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2139' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2140' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2141' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2142' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2143' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">2.50</td>
                  <td class='poljeTabele'><input type='text' id='2144' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2145' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2146' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2147' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2148' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2149' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2150' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">2.25</td>
                  <td class='poljeTabele'><input type='text' id='2151' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2152' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2153' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2154' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2155' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2156' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2157' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2158' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">2.00</td>
                  <td class='poljeTabele'><input type='text' id='2159' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2160' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2161' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2162' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2163' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2164' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2165' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2166' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2167' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">1.75</td>
                  <td class='poljeTabele'><input type='text' id='2168' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2169' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2170' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2171' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2172' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2173' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2174' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2175' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2176' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">1.50</td>
                  <td class='poljeTabele'><input type='text' id='2177' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2178' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2179' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2180' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2181' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2182' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2183' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2184' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2185' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">1.25</td>
                  <td class='poljeTabele'><input type='text' id='2186' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2187' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2188' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2189' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2190' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2191' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2192' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2193' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2194' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">1.00</td>
                  <td class='poljeTabele'><input type='text' id='2195' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2196' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2197' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2198' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2199' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2200' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2201' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2202' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2203' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">0.75</td>
                  <td class='poljeTabele'><input type='text' id='2204' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2205' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2206' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2207' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2208' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2209' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2210' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2211' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2212' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">0.50</td>
                  <td class='poljeTabele'><input type='text' id='2213' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2214' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2215' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2216' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2217' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2218' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2219' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2220' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2221' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">0.25</td>
                  <td class='poljeTabele'><input type='text' id='2222' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2223' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2224' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2225' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2226' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2227' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2228' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2229' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2230' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">0.00</td>
                  <td class='poljeTabele'></td>
                  <td class='poljeTabele'><input type='text' id='2231' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2232' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2233' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2234' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2235' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2236' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2237' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2238' class='form-control' /></td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Tabela 8 -->
          <div class="tabela8">
            <h5>1.50 CR39 HMC 70mm</h5>
            <h6 id="cyl">+Cyl</h6>
            <table class="table table-bordered table-condensed8">
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
                  <td class='poljeTabele'><input type='text' id='2239' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">5.75</td>
                  <td class='poljeTabele'><input type='text' id='2240' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">5.50</td>
                  <td class='poljeTabele'><input type='text' id='2241' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">5.25</td>
                  <td class='poljeTabele'><input type='text' id='2242' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">5.00</td>
                  <td class='poljeTabele'><input type='text' id='2243' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">4.75</td>
                  <td class='poljeTabele'><input type='text' id='2244' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">4.50</td>
                  <td class='poljeTabele'><input type='text' id='2245' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">4.25</td>
                  <td class='poljeTabele'><input type='text' id='2246' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">4.00</td>
                  <td class='poljeTabele'><input type='text' id='2247' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">3.75</td>
                  <td class='poljeTabele'><input type='text' id='2248' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2249' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">3.50</td>
                  <td class='poljeTabele'><input type='text' id='2250' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2251' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2252' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">3.25</td>
                  <td class='poljeTabele'><input type='text' id='2253' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2254' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2255' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2256' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">3.00</td>
                  <td class='poljeTabele'><input type='text' id='2257' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2258' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2259' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2260' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2261' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">2.75</td>
                  <td class='poljeTabele'><input type='text' id='2262' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2263' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2264' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2265' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2266' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2267' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">2.50</td>
                  <td class='poljeTabele'><input type='text' id='2268' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2269' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2270' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2271' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2272' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2273' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2274' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">2.25</td>
                  <td class='poljeTabele'><input type='text' id='2275' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2276' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2277' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2278' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2279' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2280' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2281' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2282' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">2.00</td>
                  <td class='poljeTabele'><input type='text' id='2283' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2284' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2285' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2286' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2287' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2288' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2289' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2290' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2291' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">1.75</td>
                  <td class='poljeTabele'><input type='text' id='2292' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2293' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2294' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2295' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2296' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2297' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2298' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2299' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2300' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">1.50</td>
                  <td class='poljeTabele'><input type='text' id='2301' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2302' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2303' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2304' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2305' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2306' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2307' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2308' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2309' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">1.25</td>
                  <td class='poljeTabele'><input type='text' id='2310' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2311' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2312' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2313' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2314' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2315' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2316' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2317' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2318' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">1.00</td>
                  <td class='poljeTabele'><input type='text' id='2319' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2320' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2321' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2322' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2323' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2324' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2325' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2326' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2327' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">0.75</td>
                  <td class='poljeTabele'><input type='text' id='2328' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2329' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2330' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2331' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2332' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2333' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2334' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2335' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2336' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">0.50</td>
                  <td class='poljeTabele'><input type='text' id='2337' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2338' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2339' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2340' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2341' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2342' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2343' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2344' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2345' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">0.25</td>
                  <td class='poljeTabele'><input type='text' id='2346' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2347' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2348' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2349' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2350' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2351' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2352' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2353' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2354' class='form-control' /></td>
                </tr>
                <tr>
                  <td class="poljeTabele">0.00</td>
                  <td class='poljeTabele'></td>
                  <td class='poljeTabele'><input type='text' id='2355' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2356' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2357' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2358' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2359' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2360' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2361' class='form-control' /></td>
                  <td class='poljeTabele'><input type='text' id='2362' class='form-control' /></td>
                </tr>
              </tbody>
            </table>
          </div>

          <h1 id="naslovNarudzbenice">Narudžbenica</h2>
            <hr>
            <?php

            require_once 'connection.php';

            $conn = OpenCon();
            $IDKorisnika = $_SESSION['prijavljen'];
            $result = mysqli_query($conn, " select * from narudzbenica where IDKorisnika = $IDKorisnika ");

            echo "<form id='mydata'>
          <div class='table-wrapper-scroll-y my-custom-scrollbar'>
          <table class='narudzbenica-tabela' id='narudzbenica'>
          <thead>
                <tr>
                <th class='tg-0lax'>Sifra</th>
                <th class='tg-0lax'>Naziv</th>
                <th id='poljeKolicine' class='tg-0lax'>Kolicina</th>
                <th class='tg-0lax'>Napomena</th>
                <th class='tg-0lax'></th>
                </tr>
                </thead>
                <tbody>";

            while ($row = mysqli_fetch_object($result)) {

              echo "<tr>";
              echo "<td><input name='sifra' type='text' class='form-control' disabled value='" . $row->sifra . "'></td>";
              echo "<td><input name='naziv' type='text' class='form-control' disabled value='" . $row->naziv . "'></td>";
              echo "<td><input name='kolicina' type='text' class='form-control' disabled value=" . $row->kolicina . "></td>";
              echo "<td><input name='napomena' type='text' class='form-control'></td>";
              echo "<td><input name='napomena2' type='text' class='form-control'></td>";
              echo "<td><a class='stavkaNarudzbenice' href='deleteRow.php?stavka={$row->ID}'><i class='fas fa-trash'></i></td>";
              echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo  "<button type='button' id='dugmeNaruci' class='btn btn-success' onclick='showTableData()'>Naruči</button>";
            echo "</form>";

            CloseCon($conn);
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
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

  <script type="text/javascript">
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
        for (var i = 1; i <= 2362; i++) {
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
            url: 'dodajStavku-db.php',
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