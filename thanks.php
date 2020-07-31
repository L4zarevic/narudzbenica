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



          <div class="thankYou">
            <h2 style="color:#0fad00">Hvala na narudžbi</h2>
            </br>
            <img id="checkMark" src="images/green-check-icon.png">
            </br>
            </br>
            <h3>Poštovani/a</h3>
            <p style="font-size:20px;color:#5C5C5C;">Vaša narudžba je poslata veleprodaji M-Optic.</br> Za sve dodatne informacije možete nas kontaktirati putem email-a <a href="mailto:mopticvp@mojaoptika.com">mopticvp@mojaoptika.com</a></p>
            <a id="homeButton" href="index.php" class="btn btn-success">    Povratak na početnu    </a>
            <br><br>

          </div>


        </div>








      </div>
      <!-- /.container-fluid -->


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
              stavka: "7#" + inputVal
            }),
            success: function() {
              location.reload();
            },
            error: function() {
              location.reload();
            }
          });
        }
      </script>


</body>

</html>