<!DOCTYPE html>
<html lang="en">

<?php
include '../modules/header.php';
?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php include 'modules/menu.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <?php
        include '../modules/logout.php';
        ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">



          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Lagerska stakla bifocali i progresivi</h1>

          <div class='tabelaSpecijala1'>
            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>OD / OS / OU</label></strong><label class="obavezna_polja">*</label>
                <select name="od_os_ou" title="OD - za desno oko, OS - za lijevo oko, OU - ako je obostrano isto" class="form-control" id="select1">
                  <option>OD</option>
                  <option>OS</option>
                  <option>OU</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <input name="id_stavke" type="hidden" class="form-control" id="id_stavke" value="">
              </div>
            </div>
            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>Vrsta sočiva</label></strong><label class="obavezna_polja">*</label>
                <select name="vrsta_sociva" title="Unesite vrstu sočiva" class="form-control" id="select2">
                  <option default></option>
                  <option>Bifokal</option>
                  <option>Progresiv</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>Vrsta materijala</label></strong><label class="obavezna_polja">*</label>
                <select name="materijal" title="Unesite vrstu materijala za recepturu" class="form-control" id="select3">
                  <option default></option>
                  <option>1.50 HMC</option>
                  <option>1.56 Photocromic gray HMC</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong> <label>SPH</label></strong>
                <select name="sph" title="Unesite Sfernu dioptriju sa popisa" class="form-control" id="select11">
                  <option default></option>
                  <option> 0.00</option>
                  <option>+0.25</option>
                  <option>+0.50</option>
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
                </select>
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>Add / Dig.</label></strong>
                <select name="add" title="Dodajte adiciju ili digresiju za office progresive" class="form-control" id="select13">
                  <option default></option>
                  <option>1.00</option>
                  <option>1.25</option>
                  <option>1.50</option>
                  <option>1.75</option>
                  <option>2.00</option>
                  <option>2.25</option>
                  <option>2.50</option>
                  <option>2.75</option>
                  <option>3.00</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>Jedinica mjere</label></strong>
                <select name="jm" title="Unesite jedinicu mjere" class="form-control" id="select14" disabled>
                  <option default>kom</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>Količina</label></strong><label class="obavezna_polja">*</label>
                <input name="kolicina" title="Unesite potrebnu količinu.Za 2 ili više komada, stavljajte na početku Ou - Obostrano isto!" type="text" class="form-control2" id="kolicina">
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>MPC po komadu</label></strong><label class="obavezna_polja">*</label>
                <input name="mpc" title="Unesite MPC" type="text" class="form-control2" id="mpc">
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-5">
                <strong><label>Broj radnog naloga (№) </strong></label><label class="obavezna_polja">*</label>
                <input name="broj_radnog_naloga" maxlength='30' class="form-control2" type="text" title="Unesite broj radnog naloga" id="broj_radnog_naloga" placeholder="" />
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-5">
                <strong><label>Napomena</label></strong>
                <textarea name="napomena" class="form-control" type="text" title="NAPOMENA: Ovdje unosite: Stepen zatamnjenja; Decentracija; Ime i prezime; Vrijeme isporuke itd." id="napomena" row="4"></textarea>
              </div>
            </div>
            <button type='button' onclick="return checkLagerBifoProgForm();" id='dugmeNaruci' class='btn btn-success'><i class="fa fa-save"></i>&nbsp;Sačuvaj stavku</button>
          </div>

          <div class="tabelaSpecijala2">
            <strong>NAPOMENA:</strong></br>
            -OD(za desno oko)</br>
            -OS(za lijevo oko)</br>
            -OU(obostrano)</br>
            -SPH(sferna dioptrija)</br>
            -Add(adicija)</br>
            </br>
            <label class="obavezna_polja">* Obavezna polja su:</label></br>
            -OD/OS/OU</br>
            -Vrsta sočiva</br>
            -Vrsta materijala</br>
            -Količina</br>
            </br>
          </div>

          <!-- /.container-fluid -->
        </div>

      </div>
      <div class="naslov">
        <?php
        include '../poloptic/narudzbenicaSpecijala.php';
        ?>
      </div>
    </div>

    <!-- End of Main Content -->

    <!-- Footer -->
    <?php
    include '../modules/footer.php';
    ?>
    <!-- End of Footer -->

</body>

</html>