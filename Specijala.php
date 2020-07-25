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


          <div class='leftColumnSpec'>
            <form method="POST" action="/dodajStavkuSpecijala-db.php">
              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect1">Od / Os / Ou</label>
                  <select name="od_os_ou" title="Od - za desno oko, Os - za lijevo oko , Ou - ako je obostrano isto" class="form-control" id="select1">
                    <option></option>
                    <option>Od</option>
                    <option>Os</option>
                    <option>Ou</option>
                  </select>
                </div>
              </div>
              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect1">Vrsta sočiva</label>
                  <select name="vrsta_sociva" title="Unesite vrstu sočiva" class="form-control" id="select1">
                    <option></option>
                    <option>Monofokal</option>
                    <option>Lentikular</option>
                    <option>Bifokal FT28</option>
                    <option>Bifokal CT28</option>
                    <option>Multifokal</option>
                    <option>Progresiv</option>
                  </select>
                </div>
              </div>

              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect2">Dizajni kontaktnih sočiva</label>
                  <select name="dizajn" title="Unesite vrstu dizajna" class="form-control" id="select2">
                    <option></option>
                    <option>Sverik</option>
                    <option>Asverik</option>
                    <option>RX</option>
                    <option>Panorama</option>
                    <option>Anglera</option>
                    <option>>Elegance</option>
                    <option>Matrix Mono</option>
                    <option>Matrix Sport</option>
                    <option>Pollux Pro</option>
                    <option>Polino</option>
                    <option>Inoffis</option>
                    <option>Invision Ultey</option>
                    <option>Invisio Raund</option>
                    <option>>Harmony</option>
                    <option>Futura Pro</option>
                    <option>Infini Pro</option>
                    <option>Varia Pro</option>
                    <option>Custom Fit</option>
                    <option>Sequel DBS</option>
                    <option>Adapta DBS</option>
                    <option>Matrix Pro</option>
                    <option>Matrix Short</option>
                    <option>Dynamic</option>
                    <option>Active</option>
                    <option>Active Elegance</option>
                    <option>Operative</option>
                    <option>Light Form</option>
                    <option>Hexacorr</option>
                    <option>AOA H63</option>
                    <option>DACP/30</option>
                    <option>AOA Colors</option>
                    <option>AOA N@D</option>
                    <option>AOT3</option>
                    <option>F55A/6</option>
                    <option>XCT3</option>
                    <option>BFT3</option>
                    <option>SL59/6</option>
                    <option>OFW/4</option>
                    <option>PV2/3</option>
                    <option>SLT/6</option>
                    <option>PV2T/6</option>
                    <option>ST43/1</option>
                    <option>ST43/3</option>
                    <option>ST43/12</option>
                  </select>
                </div>
              </div>

              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect2">Visina ugradnje</label>
                  <select name="visina" title="Visina ugradnje (ili koridor) Unesite Visinu ugradnje za progresive: 'Infini i sve progresive iz Orange Linea' ili koridor za klasične progresive (Futura,Pollux i Polaris)" class="form-control" id="exampleFormControlSelect1">
                    <option></option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                    <option>32</option>
                    <option>33</option>
                    <option>34</option>
                    <option>35</option>
                  </select>
                </div>
              </div>

              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect2">Index</label>
                  <select name="index" title="Unesite Index prelamanja" class="form-control" id="exampleFormControlSelect1">
                    <option></option>
                    <option>+1.50</option>
                    <option>+1.53</option>
                    <option>+1.56</option>
                    <option>+1.59</option>
                    <option>+1.60</option>
                    <option>+1.67</option>
                    <option>+1.70</option>
                    <option>+1.74</option>
                    <option>+1.80</option>
                    <option>+1.90</option>
                  </select>
                </div>
              </div>

              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect2">Materijal za recepturu</label>
                  <select name="materijal" title="Unesite vrstu materijala za recepturu" class="form-control" id="exampleFormControlSelect1">
                    <option></option>
                    <option>Mineral</option>
                    <option>Fotomineral</option>
                    <option>CR39</option>
                    <option>CR39 HMC</option>
                    <option>CRPHG HMC</option>
                    <option>Photohrom.MC</option>
                    <option>CR39UT</option>
                    <option>CR39BT</option>
                    <option>CR39NT</option>
                    <option>Transit.UT</option>
                    <option>RemUV420UT</option>
                    <option>Poly HMC</option>
                    <option>Solea</option>
                    <option>Solea UBS</option>
                    <option>Poly</option>
                    <option>Trivex</option>
                    <option>Tribrid</option>
                    <option>RemUVPhoto</option>
                    <option>Transitions</option>
                    <option>PolyTransitions</option>
                    <option>TrivexTransition</option>
                    <option>NuPolar</option>
                    <option>DrimeWear</option>
                    <option>Photomat.</option>
                    <option>Tran.Xtract</option>
                  </select>
                </div>
              </div>


              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect2">Boja</label>
                  <select name="boja" title="Unesite boju u sljedećim slučajevima: -za fotostakla, -za bojena i gradual stakla  NAPOMENA: Nivo zatamnjenja unesite u polju 'NAPOMENA'" class="form-control" id="exampleFormControlSelect1">
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
                  <input name="baza" title="Unesite bazu sočiva" type="text" class="form-control" id="inputText">
                </div>
              </div>


              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect2">Prečnik mm</label>
                  <select name="precnik1" title="Unesite prečnik" class="form-control" id="precnik1">
                    <option></option>
                    <option>50</option>
                    <option>51</option>
                    <option>52</option>
                    <option>53</option>
                    <option>54</option>
                    <option>55</option>
                    <option>56</option>
                    <option>57</option>
                    <option>58</option>
                    <option>59</option>
                    <option>60</option>
                    <option>61</option>
                    <option>62</option>
                    <option>63</option>
                    <option>64</option>
                    <option>65</option>
                    <option>66</option>
                    <option>67</option>
                    <option>68</option>
                    <option>69</option>
                    <option>70</option>
                    <option>71</option>
                    <option>72</option>
                    <option>73</option>
                    <option>74</option>
                    <option>75</option>
                  </select>
                  <select name="precnik2" title="Unesite prečnik" class="form-control" id="precnik2">
                    <option></option>
                    <option>50</option>
                    <option>51</option>
                    <option>52</option>
                    <option>53</option>
                    <option>54</option>
                    <option>55</option>
                    <option>56</option>
                    <option>57</option>
                    <option>58</option>
                    <option>59</option>
                    <option>60</option>
                    <option>61</option>
                    <option>62</option>
                    <option>63</option>
                    <option>64</option>
                    <option>65</option>
                    <option>66</option>
                    <option>67</option>
                    <option>68</option>
                    <option>69</option>
                    <option>70</option>
                    <option>71</option>
                    <option>72</option>
                    <option>73</option>
                    <option>74</option>
                    <option>75</option>
                  </select>
                </div>
              </div>


              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect2">SPH</label>
                  <select name="sph" title="Unesite Svernu dioptriju sa popisa" class="form-control" id="exampleFormControlSelect1">
                    <option></option>
                    <option>0.25</option>
                    <option>0.50</option>
                    <option>0.75</option>
                    <option>1.00</option>
                    <option>1.25</option>
                    <option>1.50</option>
                    <option>1.75</option>
                    <option>2.00</option>
                    <option>2.25</option>
                    <option>2.50</option>
                    <option>2.75</option>
                    <option>3.00</option>
                    <option>3.25</option>
                    <option>3.50</option>
                    <option>3.75</option>
                    <option>4.00</option>
                    <option>4.25</option>
                    <option>4.50</option>
                    <option>4.75</option>
                    <option>5.00</option>
                    <option>5.25</option>
                    <option>5.50</option>
                    <option>5.75</option>
                    <option>6.00</option>
                    <option>6.25</option>
                    <option>6.50</option>
                    <option>6.75</option>
                    <option>7.00</option>
                    <option>7.25</option>
                    <option>7.50</option>
                    <option>7.75</option>
                    <option>8.00</option>
                    <option>8.25</option>
                    <option>8.50</option>
                    <option>8.75</option>
                    <option>9.00</option>
                    <option>9.25</option>
                    <option>9.50</option>
                    <option>9.75</option>
                    <option>10.00</option>
                    <option>10.25</option>
                    <option>10.50</option>
                    <option>10.75</option>
                    <option>11.00</option>
                    <option>11.25</option>
                    <option>11.50</option>
                    <option>11.75</option>
                    <option>12.00</option>
                    <option>12.50</option>
                    <option>13.00</option>
                    <option>13.50</option>
                    <option>14.00</option>
                    <option>14.50</option>
                    <option>15.00</option>
                    <option>15.50</option>
                    <option>16.00</option>
                    <option>-0.25</option>
                    <option>-0.50</option>
                    <option>-0.75</option>
                    <option>-1.00</option>
                    <option>-1.25</option>
                    <option>-1.50</option>
                    <option>-1.75</option>
                    <option>-2.00</option>
                    <option>-2.25</option>
                    <option>-2.50</option>
                    <option>-2.75</option>
                    <option>-3.00</option>
                    <option>-3.25</option>
                    <option>-3.50</option>
                    <option>-3.75</option>
                    <option>-4.00</option>
                    <option>-4.25</option>
                    <option>-4.50</option>
                    <option>-4.75</option>
                    <option>-5.00</option>
                    <option>-5.25</option>
                    <option>-5.50</option>
                    <option>-5.75</option>
                    <option>-6.00</option>
                    <option>-6.25</option>
                    <option>-6.50</option>
                    <option>-6.75</option>
                    <option>-7.00</option>
                    <option>-7.25</option>
                    <option>-7.50</option>
                    <option>-7.75</option>
                    <option>-8.00</option>
                    <option>-8.25</option>
                    <option>-8.50</option>
                    <option>-8.75</option>
                    <option>-9.00</option>
                    <option>-9.25</option>
                    <option>-9.50</option>
                    <option>-9.75</option>
                    <option>-10.00</option>
                    <option>-10.25</option>
                    <option>-10.50</option>
                    <option>-10.75</option>
                    <option>-11.00</option>
                    <option>-11.25</option>
                    <option>-11.50</option>
                    <option>-11.75</option>
                    <option>-12.00</option>
                    <option>-12.25</option>
                    <option>-12.50</option>
                    <option>-12.75</option>
                    <option>-13.00</option>
                    <option>-13.25</option>
                    <option>-13.50</option>
                    <option>-13.75</option>
                    <option>-14.00</option>
                    <option>-14.25</option>
                    <option>-14.50</option>
                    <option>-14.75</option>
                    <option>-15.00</option>
                    <option>-15.25</option>
                    <option>-15.50</option>
                    <option>-15.75</option>
                    <option>-16.00</option>
                    <option>-16.25</option>
                    <option>-16.50</option>
                    <option>-16.75</option>
                    <option>-17.00</option>
                    <option>-17.25</option>
                    <option>-17.50</option>
                    <option>-17.75</option>
                    <option>-18.00</option>
                    <option>-18.50</option>
                    <option>-19.00</option>
                    <option>-19.50</option>
                    <option>-20.00</option>
                    <option>-20.50</option>
                    <option>-21.00</option>
                    <option>-21.50</option>
                    <option>-22.00</option>
                    <option>-23.00</option>
                    <option>-24.00</option>
                    <option>-25.00</option>
                    <option>-26.00</option>
                    <option>-27.00</option>
                    <option>-28.00</option>
                    <option>-29.00</option>
                    <option>-30.00</option>
                  </select>
                </div>
              </div>


              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect2">CYL</label>
                  <select name="cyl" title="Unesite Cilindričnu dioptriju sa popisa" class="form-control" id="exampleFormControlSelect1">
                    <option></option>
                    <option>0.25</option>
                    <option>0.50</option>
                    <option>0.75</option>
                    <option>1.00</option>
                    <option>1.25</option>
                    <option>1.50</option>
                    <option>1.75</option>
                    <option>2.00</option>
                    <option>2.25</option>
                    <option>2.50</option>
                    <option>2.75</option>
                    <option>3.00</option>
                    <option>3.25</option>
                    <option>3.50</option>
                    <option>3.75</option>
                    <option>4.00</option>
                    <option>4.25</option>
                    <option>4.50</option>
                    <option>4.75</option>
                    <option>5.00</option>
                    <option>5.25</option>
                    <option>5.50</option>
                    <option>5.75</option>
                    <option>6.00</option>
                    <option>-0.25</option>
                    <option>-0.50</option>
                    <option>-0.75</option>
                    <option>-1.00</option>
                    <option>-1.25</option>
                    <option>-1.50</option>
                    <option>-1.75</option>
                    <option>-2.00</option>
                    <option>-2.25</option>
                    <option>-2.50</option>
                    <option>-2.75</option>
                    <option>-3.00</option>
                    <option>-3.25</option>
                    <option>-3.50</option>
                    <option>-3.75</option>
                    <option>-4.00</option>
                    <option>-4.25</option>
                    <option>-4.50</option>
                    <option>-4.75</option>
                    <option>-5.00</option>
                    <option>-5.25</option>
                    <option>-5.50</option>
                    <option>-5.75</option>
                    <option>-6.00</option>
                  </select>
                </div>
              </div>


              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect2">Ax</label>
                  <input name="ugao" title="Unesite ugao cilindra" type="text" class="form-control" id="inputText">
                </div>
              </div>


              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect2">Add / Dig.</label>
                  <select name="add" title="Dodajte adiciju ili digresiju za office progresive" class="form-control" id="exampleFormControlSelect1">
                    <option></option>
                    <option>+0.75</option>
                    <option>+1.00</option>
                    <option>+1.25</option>
                    <option>+1.50</option>
                    <option>+1.75</option>
                    <option>+2.00</option>
                    <option>+2.25</option>
                    <option>+2.50</option>
                    <option>+2.75</option>
                    <option>+3.00</option>
                    <option>+3.25</option>
                    <option>+3.50</option>
                    <option>+3.75</option>
                    <option>+4.00</option>
                  </select>
                </div>
              </div>

              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect2">Jedinica mjere</label>
                  <select name="jm" title="Unesite jedinicu mjere" class="form-control" id="exampleFormControlSelect1">
                    <option>kom</option>
                    <option>kut</option>
                    <option>kut-2</option>
                    <option>kut-3</option>
                    <option>kut-4</option>
                    <option>kut-6</option>
                    <option>kut-30</option>
                    <option>paklo-10</option>
                    <option>paklo-100</option>
                  </select>
                </div>
              </div>


              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect2">Količina</label>
                  <input name="kolicina" title="Unesite potrebnu količinu.Za 2 ili više komada, stavljajte na početku Ou - Obostrano isto!" type="text" class="form-control" id="inputText">
                </div>
              </div>

              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect2">Tretman1</label>
                  <select name="tretman1" class="form-control" id="exampleFormControlSelect1">
                    <option></option>
                    <option>HC</option>
                    <option>MultiPlus</option>
                    <option>UltraGlide</option>
                    <option>NanoGlide</option>
                    <option>PolarGlide</option>
                    <option>BlueGlide</option>
                    <option>PureGLide</option>
                    <option>UGBackside</option>
                    <option>Mirror/UltraBS</option>
                    <option>Bojenje</option>
                    <option>Boj.Vis.Index</option>
                    <option>Boj.Uzorka</option>
                    <option>Boj.Uzor.Vis.Ind</option>
                    <option>Gradient</option>
                    <option>Grad.Vis.Ind</option>
                    <option>UVProtektor</option>
                    <option>BlueBlocker</option>
                    <option>Prizme do 5D</option>
                    <option>Prizme 5-12D</option>
                    <option>Cylin. 6.25-12D</option>
                  </select>
                </div>
              </div>

              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect2">Tretman2</label>
                  <select name="tretman2" class="form-control" id="exampleFormControlSelect1">
                    <option></option>
                    <option>HC</option>
                    <option>MultiPlus</option>
                    <option>UltraGlide</option>
                    <option>NanoGlide</option>
                    <option>PolarGlide</option>
                    <option>BlueGlide</option>
                    <option>PureGLide</option>
                    <option>UGBackside</option>
                    <option>Mirror/UltraBS</option>
                    <option>Bojenje</option>
                    <option>Boj.Vis.Index</option>
                    <option>Boj.Uzorka</option>
                    <option>Boj.Uzor.Vis.Ind</option>
                    <option>Gradient</option>
                    <option>Grad.Vis.Ind</option>
                    <option>UVProtektor</option>
                    <option>BlueBlocker</option>
                    <option>Prizme do 5D</option>
                    <option>Prizme 5-12D</option>
                    <option>Cylin. 6.25-12D</option>
                  </select>
                </div>
              </div>

              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect2">Napomena</label>
                  <textarea class="form-control" type="text" title="NAPOMENA: Ovdje unosite: Stepen zatamnjenja; Ime i prezime; Vrijeme isporuke itd." class="form-control" id="inputText" row="4"></textarea>
                </div>
                <button type='submit' id='dugmeNaruci' class='btn btn-success'>Sačuvaj stavku</button>
            </form>
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

        <h1 id="naslovNarudzbenice">Narudžbenica</h1>
        <hr>

        <?php
        include 'narudzbenicaSpecijala.php';
        ?>
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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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