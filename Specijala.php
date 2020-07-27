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
          <h1 class="h3 mb-4 text-gray-800">Specijala</h1>


          <div class='leftColumnSpec'>
            <form method="POST" action="../narudzbenica/dodajStavkuSpecijala-db.php" onsubmit="return checkForm()">
              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect1">Od / Os / Ou</label>
                  <select name="od_os_ou" title="Od - za desno oko, Os - za lijevo oko , Ou - ako je obostrano isto" class="form-control" id="select1">
                    <option value="0"></option>
                    <option>Od</option>
                    <option>Os</option>
                    <option>Ou</option>
                  </select>
                </div>
              </div>
              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect1">Vrsta sočiva</label>
                  <select name="vrsta_sociva" title="Unesite vrstu sočiva" class="form-control" id="select2" required>
                    <option value="0"></option>
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
                  <label for="exampleFormControlSelect2">Visina ugradnje</label>
                  <select name="visina" title="Visina ugradnje (ili koridor) Unesite Visinu ugradnje za progresive: 'Infini i sve progresive iz Orange Linea' ili koridor za klasične progresive (Futura,Pollux i Polaris)" class="form-control" id="select3">
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
                  <label for="exampleFormControlSelect2">Baza</label>
                  <input name="baza" title="Unesite bazu sočiva" type="text" class="form-control" id="inputText">
                </div>
              </div>

              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect2">Index</label>
                  <select name="index" title="Unesite Index prelamanja" class="form-control" id="select4">
                    <option value="0"></option>
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
                  <select name="materijal" title="Unesite vrstu materijala za recepturu" class="form-control" id="select5">
                    <option value="0"></option>
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
                  <label for="exampleFormControlSelect2">Prečnik mm</label>
                  <select name="precnik1" title="Unesite prečnik" class="form-control" id="select6">
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
                  <select name="precnik2" title="Unesite prečnik" class="form-control" id="select7">
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
                  <select name="sph" title="Unesite Svernu dioptriju sa popisa" class="form-control" id="select8">
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
                  <select name="cyl" title="Unesite Cilindričnu dioptriju sa popisa" class="form-control" id="select9">
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
                  <select name="add" title="Dodajte adiciju ili digresiju za office progresive" class="form-control" id="select10">
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
                  <select name="jm" title="Unesite jedinicu mjere" class="form-control" id="select11">
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
                  <input name="kolicina" title="Unesite potrebnu količinu.Za 2 ili više komada, stavljajte na početku Ou - Obostrano isto!" type="text" class="form-control" id="kolicina">
                </div>
              </div>

              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <label for="exampleFormControlSelect2">Tretman1</label>
                  <select name="tretman1" class="form-control" id="select12">
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
                  <select name="tretman2" class="form-control" id="select13">
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
                  <textarea name="napomena" class="form-control" type="text" title="NAPOMENA: Ovdje unosite: Stepen zatamnjenja; Ime i prezime; Vrijeme isporuke itd." id="inputText" row="4"></textarea>
                </div>
                <button type='submit' id='dugmeNaruci' class='btn btn-success'>Sačuvaj stavku</button>
            </form>
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
    <?php
    include '../narudzbenica/modules/footer.php';
    ?>
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
  <script src="js/myScript.js"></script>
  <script type="text/javascript">
    
  </script>


</body>

</html>