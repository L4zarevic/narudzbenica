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
          <h1 class="h3 mb-4 text-gray-800">Narudžba</h1>

          <div class='tabelaSpecijala1'>
            <div class="rowSpec">
              <div class="form-group col-md-2">
                <input name="id_stavke" type="hidden" class="form-control" id="id_stavke" value="">
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>Vrsta materijala</label></strong><label class="obavezna_polja">*</label>
                <select name="materijal" title="Unesite vrstu materijala" class="form-control" id="vrsta_materijala">
                  <option default></option>
                  <option>1.50 CR-39 UC</option>
                  <option>1.50 HMC</option>
                  <option>1.60 HMC</option>
                  <option>1.56 SHMC</option>
                  <option>1.56 Anti Blue</option>
                  <option>1.56 Photocromic Gray</option>
                  <option>1.56 Photocromic Brown</option>
                  <option>1.59 Polycarbonate</option>
                  <option>1.50 Lentikular</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>SPH</label></strong>
                <select name="sph" title="Unesite Sfernu dioptriju sa popisa" class="form-control" id="select11">
                  <option default></option>
                  <option> 0.00</option>
                  <?php
                  for ($x = 0.25; $x <= 16.00; $x = $x + 0.25) {
                    echo  "<option>+" . sprintf('%0.2f', $x) . "</option>";
                  }
                  ?>
                  <option> 0.00</option>
                  <?php
                  for ($x = 0.25; $x <= 17.75; $x = $x + 0.25) {
                    echo  "<option>-" . sprintf('%0.2f', $x) . "</option>";
                  }
                  ?>
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
                <strong> <label>CYL</label></strong>
                <select name="cyl" title="Unesite Cilindričnu dioptriju sa popisa" class="form-control" id="select12">
                  <option default></option>
                  <option>0.00</option>
                  <?php
                  for ($x = 0.25; $x <= 6.00; $x = $x + 0.25) {
                    echo  "<option>+" . sprintf('%0.2f', $x) . "</option>";
                  }
                  ?>
                  <option> 0.00</option>
                  <?php
                  for ($x = 0.25; $x <= 6.00; $x = $x + 0.25) {
                    echo  "<option>-" . sprintf('%0.2f', $x) . "</option>";
                  }
                  ?>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>Jedinica mjere</label></strong>
                <select name="jm" title="Unesite jedinicu mjere" class="form-control" id="select14">
                  <option default>kom</option>
                </select>
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>Količina</label></strong><label class="obavezna_polja">*</label>
                <input name="kolicina" maxlength="2" title="Unesite potrebnu količinu.Za 2 ili više komada, stavljajte na početku Ou - Obostrano isto!" type="text" class="form-control2" id="kolicina">
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
            <button type='button' onclick="return checkFormMoptic();" id='dugmeNaruci' class='btn btn-success'><i class="fa fa-save"></i>&nbsp;Sačuvaj stavku</button>
          </div>
        </div>


        <div class="tabelaSpecijala2">
          <strong>NAPOMENA:</strong></br>
          -SPH(sferna dioptrija)</br>
          -CYL(cilindrična dioptrija)</br>
          </br>
          <label class="obavezna_polja">* Obavezna polja su:</label></br>
          -Dizajn</br>
          -Index</br>
          -Prečnik</br>
          -Količina</br>
          -MPC po komadu</br>
          -Broj radnog naloga</br>
          </br>
          </br>

        </div>

        <!-- /.container-fluid -->
      </div>

      <div class="naslov">

        <?php
        include 'narudzbenicaSpecijala.php';
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

<script type="text/javascript">
  var $select2 = $('#select2');
  $('#showSegment').hide();

  $select2.on('change', function() {

    if (this.value == '3') {
      $('#ifYes').show();
    } else {
      $('#ifYes').hide();
    }

    if (this.value == '2') {
      $('#showSegment').show();
    } else {
      $('#showSegment').hide();
    }
  });
</script>

</html>