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
          <h1 class="h3 mb-4 text-gray-800">Specijala</h1>


          <div class='lijevaKolona'>
            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect1">Od / Os / Ou</label>
                <select class="form-control" id="select1">
                  <option value="0"></option>
                  <option value="1">Od</option>
                  <option value="2">Os</option>
                  <option value="3">Ou</option>
                </select>
              </div>
            </div>
            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect1">Vrsta sočiva</label>
                <select class="form-control" id="select1">
                  <option value="0"></option>
                  <option value="1">Monofokal</option>
                  <option value="2">Lentikular</option>
                  <option value="3">Bifokal FT28</option>
                  <option value="4">Bifokal CT28</option>
                  <option value="5">Multifokal</option>
                  <option value="6">Progresiv</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Dizajni kontaktnih sočiva</label>
                <select class="form-control" id="select2">
                  <option value="0"></option>
                  <option value="1">Sverik</option>
                  <option value="2">Asverik</option>
                  <option value="3">RX</option>
                  <option value="4">Panorama</option>
                  <option value="5">Anglera</option>
                  <option value="6">Elegance</option>
                  <option value="7">Matrix Mono</option>
                  <option value="8">Matrix Sport</option>
                  <option value="9">Pollux Pro</option>
                  <option value="10">Polino</option>
                  <option value="11">Inoffis</option>
                  <option value="12">Invision Ultey</option>
                  <option value="13">Invisio Raund</option>
                  <option value="14">Harmony</option>
                  <option value="15">Futura Pro</option>
                  <option value="16">Infini Pro</option>
                  <option value="17">Varia Pro</option>
                  <option value="18">Custom Fit</option>
                  <option value="19">Sequel DBS</option>
                  <option value="20">Adapta DBS</option>
                  <option value="21">Matrix Pro</option>
                  <option value="22">Matrix Short</option>
                  <option value="23">Dynamic</option>
                  <option value="24">Active</option>
                  <option value="25">Active Elegance</option>
                  <option value="26">Operative</option>
                  <option value="27">Light Form</option>
                  <option value="28">Hexacorr</option>
                  <option value="29">AOA H63</option>
                  <option value="30">DACP/30</option>
                  <option value="31">AOA Colors</option>
                  <option value="32">AOA N@D</option>
                  <option value="33">AOT3</option>
                  <option value="34">F55A/6</option>
                  <option value="35">XCT3</option>
                  <option value="36">BFT3</option>
                  <option value="37">SL59/6</option>
                  <option value="38">OFW/4</option>
                  <option value="39">PV2/3</option>
                  <option value="40">SLT/6</option>
                  <option value="41">PV2T/6</option>
                  <option value="42">ST43/1</option>
                  <option value="43">ST43/3</option>
                  <option value="44">ST43/12</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Visina ugradnje</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="0"></option>
                  <option value="1">13</option>
                  <option value="2">14</option>
                  <option value="0">15</option>
                  <option value="0">16</option>
                  <option value="0">17</option>
                  <option value="0">18</option>
                  <option value="0">19</option>
                  <option value="0">20</option>
                  <option value="0">21</option>
                  <option value="0">22</option>
                  <option value="0">23</option>
                  <option value="0">24</option>
                  <option value="0">25</option>
                  <option value="0">26</option>
                  <option value="0">27</option>
                  <option value="0">28</option>
                  <option value="0">29</option>
                  <option value="0">30</option>
                  <option value="0">31</option>
                  <option value="0">32</option>
                  <option value="0">33</option>
                  <option value="0">34</option>
                  <option value="0">35</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Index</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="0"></option>
                  <option value="0">+1.50</option>
                  <option value="0">+1.53</option>
                  <option value="0">+1.56</option>
                  <option value="0">+1.59</option>
                  <option value="0">+1.60</option>
                  <option value="0">+1.67</option>
                  <option value="0">+1.70</option>
                  <option value="0">+1.74</option>
                  <option value="0">+1.80</option>
                  <option value="0">+1.90</option>
                </select>

              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Materijal za recepturu</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="0"></option>
                  <option value="0">Mineral</option>
                  <option value="0">Fotomineral</option>
                  <option value="0">CR39</option>
                  <option value="0">CR39 HMC</option>
                  <option value="0">CRPHG HMC</option>
                  <option value="0">Photohrom.MC</option>
                  <option value="0">CR39UT</option>
                  <option value="0">CR39BT</option>
                  <option value="0">CR39NT</option>
                  <option value="0">Transit.UT</option>
                  <option value="0">RemUV420UT</option>
                  <option value="0">Poly HMC</option>
                  <option value="0">Solea</option>
                  <option value="0">Solea UBS</option>
                  <option value="0">Poly</option>
                  <option value="0">Trivex</option>
                  <option value="0">Tribrid</option>
                  <option value="0">RemUVPhoto</option>
                  <option value="0">Transitions</option>
                  <option value="0">PolyTransitions</option>
                  <option value="0">TrivexTransition</option>
                  <option value="0">NuPolar</option>
                  <option value="0">DrimeWear</option>
                  <option value="0">Photomat.</option>
                  <option value="0">Tran.Xtract</option>

                </select>
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Boja</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="0"></option>
                  <option value="0">Gray</option>
                  <option value="0">Brown</option>
                  <option value="0">Green</option>
                  <option value="0">Turquoise</option>
                  <option value="0">Amethyst</option>
                  <option value="0">TrueSapphire</option>
                  <option value="0">PureHazel</option>
                  <option value="0">Blue</option>
                  <option value="0">Honey</option>
                  <option value="0">GemstonGreen</option>
                  <option value="0">BriliantBlue</option>
                  <option value="0">SterlingGray</option>
                  <option value="0">India</option>
                  <option value="0">DarkHazel</option>
                  <option value="0">Aquamarine</option>
                  <option value="0">Emerald</option>
                  <option value="0">Amazon</option>
                  <option value="0">Jade</option>
                  <option value="0">Topaz</option>
                  <option value="0">Pacific</option>
                  <option value="0">Platinum</option>
                  <option value="0">Indigo</option>
                </select>
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Baza</label>
                <input type="text" class="form-control" id="inputText">
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Prečnik mm</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="0"></option>
                  <option value="0">50</option>
                  <option value="0">51</option>
                  <option value="0">52</option>
                  <option value="0">53</option>
                  <option value="0">54</option>
                  <option value="0">55</option>
                  <option value="0">56</option>
                  <option value="0">57</option>
                  <option value="0">58</option>
                  <option value="0">59</option>
                  <option value="0">60</option>
                  <option value="0">61</option>
                  <option value="0">62</option>
                  <option value="0">63</option>
                  <option value="0">64</option>
                  <option value="0">65</option>
                  <option value="0">66</option>
                  <option value="0">67</option>
                  <option value="0">68</option>
                  <option value="0">69</option>
                  <option value="0">70</option>
                  <option value="0">71</option>
                  <option value="0">72</option>
                  <option value="0">73</option>
                  <option value="0">74</option>
                  <option value="0">75</option>
                </select>
                <select class="form-control" id="exampleFormControlSelect1">
                <option value="0"></option>
                  <option value="0">50</option>
                  <option value="0">51</option>
                  <option value="0">52</option>
                  <option value="0">53</option>
                  <option value="0">54</option>
                  <option value="0">55</option>
                  <option value="0">56</option>
                  <option value="0">57</option>
                  <option value="0">58</option>
                  <option value="0">59</option>
                  <option value="0">60</option>
                  <option value="0">61</option>
                  <option value="0">62</option>
                  <option value="0">63</option>
                  <option value="0">64</option>
                  <option value="0">65</option>
                  <option value="0">66</option>
                  <option value="0">67</option>
                  <option value="0">68</option>
                  <option value="0">69</option>
                  <option value="0">70</option>
                  <option value="0">71</option>
                  <option value="0">72</option>
                  <option value="0">73</option>
                  <option value="0">74</option>
                  <option value="0">75</option>
                </select>
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">SPH</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>
                </select>
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">CYL</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>
                </select>
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Ax</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>
                </select>
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Add / Dig.</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Jedinica mjere</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>
                </select>
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Količina</label>
                <input type="text" class="form-control" id="inputText">
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Tretman1</label>
                <input type="text" class="form-control" id="inputText">
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Tretman2</label>
                <input type="text" class="form-control" id="inputText">
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Napomena</label>
                <input type="text" class="form-control" id="inputText">
              </div>
            </div>


            <!-- <div class='desnaKolona'>
            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect1">Tip sočiva</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>
                  <option value="zamjena">Bifocal</option>
                  <option value="povrat_novca">Progresiv</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Model</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Materijal</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Index</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Precnik</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>

                </select>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>

                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Sfera</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>
                </select>
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Cilindar</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>
                </select>
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Ugao cil.</label>
                <input type="text" class="form-control" id="inputText">
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Prizma</label>
                <input type="text" class="form-control" id="inputText">
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Ugao baze</label>
                <input type="text" class="form-control" id="inputText">
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Decentriranje</label>
                <input type="text" class="form-control" id="inputText">
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Adicija</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>
                </select>
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Posebni zahtjev</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Tretmani</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>

                </select>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>
                </select>

                </select>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>
                </select>

              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Tretmani</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="popravka">Single</option>
                </select>
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Kol/Cena</label>
                <input type="text" class="form-control" id="inputText">
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Napomena</label>
                <input type="text" class="form-control" id="inputText">
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Napomena #2</label>
                <input type="text" class="form-control" id="inputText">
              </div>
            </div>
          </div>
        </div>
      </div> 
            <!-- /.container-fluid -->
          </div>
        </div>
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
    // $(document).ready(function() {
    //   $("#select1").change(function() {
    //     var val = $(this).val();
    //     if (val == "1") {
    //       $("#select2").html("<option></option><option>ASPHERIC</option><option>LENTIKULAR</option><option>OPENSENSE</option><option>READING</option><option>SPHERIC</option><option>SPORT</option>");
    //     } else if (val == "2") {
    //       $("#select2").html("<option></option><option>FT25</option><option>FT28</option>");
    //     } else if (val == "3") {
    //       $("#select2").html("<option></option><option>COMFORT</option><option>DYNAMIC17</option><option>DYNAMIC19</option><option>DYNAMIC21</option><option>GENESIS</option><option>INDIVIDUAL</option><option>INDOOR17</option><option>INDOOR19</option><option>INDOOR21</option><option>INSIGHT</option><option>OFFICE17</option><option>OPT.PLUS15</option><option>OPT.PLUS17</option><option>OPT.PLUS19</option><option>OPT.PLUS21</option><option>OPTIMA15</option><option>OPTIMA17</option><option>OPTIMA21</option><option>SHORT</option>");
    //     }
    //   });
    // });



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
    // $(document).keypress(function(e) {
    //   if (e.which == 13) {
    //     var inputVal = 0;
    //     for (var i = 1; i <= 513; i++) {
    //       if (document.getElementById(i).value.length != 0) {
    //         if (document.getElementById(i).value > 0) {
    //           if (!isNaN(document.getElementById(i).value)) {
    //             inputVal = document.getElementById(i).value + "#" + i;
    //             add(inputVal);
    //           }
    //         }
    //       }
    //     }

    //     //Funkcija za slanje podataka u tabelu naruzdbenica
    //     function add(inputVal) {
    //       $.ajax({
    //         type: 'POST',
    //         url: 'dodajStavku-db8.php',
    //         dataType: 'json',
    //         data: ({
    //           stavka: inputVal
    //         }),
    //         success: function() {
    //           location.reload();
    //         },
    //         error: function() {
    //           location.reload();
    //         }
    //       });
    //     }
    //   }
    // });
  </script>


</body>

</html>