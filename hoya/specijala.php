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
              <div class="form-group col-md-3">
                <strong> <label>OD / OS / OU</label></strong><label class="obavezna_polja">*</label>
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
                  <option value="0" default></option>
                  <option value="1">Monofokal</option>
                  <option value="2">Bifokal</option>
                  <option value="3">Progresiv</option>
                  <option value="4">Lentikular</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-4">
                <strong><label>Dizajn - Naziv proizvoda</label></strong><label class="obavezna_polja">*</label>
                <input name="dizajn" title="Unesite dizajn" type="text" class="form-control2" id="dizajn">
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>Index</label></strong><label class="obavezna_polja">*</label>
                <select name="index" title="Unesite Index prelamanja" class="form-control" id="select8">
                  <option default></option>
                  <option>1.50</option>
                  <option>1.523</option>
                  <option>1.53</option>
                  <option>1.56</option>
                  <option>1.59</option>
                  <option>1.60</option>
                  <option>1.67</option>
                  <option>1.70</option>
                  <option>1.74</option>
                  <option>1.80</option>
                  <option>1.90</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>Baza</label></strong>
                <select name="baza" title="Unesite bazu sočiva" class="form-control" id="select7">
                  <option default></option>
                  <?php
                  for ($x = 4.0; $x <= 8.5; $x = $x + 0.5) {
                    echo  "<option>" . $x . "</option>";
                  }
                  ?>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label id="labelPrecnik">Prečnik mm <label class="obavezna_polja">*</label></label></strong>
                <select name="precnik1" title="Unesite prečnik" class="form-control" id="select9">
                  <option default></option>
                  <?php
                  for ($x = 50; $x <= 75; $x++) {
                    echo  "<option>" . $x . "</option>";
                  }
                  ?>
                </select>

                <select name="precnik2" title="Unesite prečnik" class="form-control" id="select10">
                  <option default></option>
                  <?php
                  for ($x = 50; $x <= 75; $x++) {
                    echo  "<option>" . $x . "</option>";
                  }
                  ?>
                </select>
              </div>
            </div>

            <div id="ifYes" style="display: none;">
              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <strong><label>Visina ugradnje / Koridor</label></strong><label class="obavezna_polja">*</label>
                  <select name="visina" title="Visina ugradnje (ili koridor) Unesite Visinu ugradnje za progresive: 'Infini i sve progresive iz Orange Linea' ili koridor za klasične progresive (Futura,Pollux i Polaris)" class="form-control" id="select5">
                    <option default></option>
                    <?php
                    for ($x = 13; $x <= 35; $x++) {
                      echo  "<option>" . $x . "</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>

              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <strong><label>PD:</label></strong><label class="obavezna_polja">*</label>
                  <input name="pd" title="Unesite PD" type="text" maxlength="14" class="form-control2" id="pd">
                </div>
              </div>
            </div>

            <div id="showSegment">
              <div class="rowSpec">
                <div class="form-group col-md-3">
                  <strong><label>Segment:</label></strong>
                  <input name="segment" title="Unesite segment" maxlength="10" type="text" class="form-control2" id="segment">
                </div>
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
                <strong><label>Ax</label></strong><label id="label_zvjezdica1" class="obavezna_polja">*</label>
                <input name="ugao" title="Unesite ugao cilindra" maxlength="3" type="text" class="form-control2" id="ugaoCilindra">
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>Add / Dig.</label></strong><label id="label_zvjezdica2" class="obavezna_polja">*</label>
                <select name="add" title="Dodajte adiciju ili digresiju za office progresive" class="form-control" id="select13">
                  <option default></option>
                  <?php
                  for ($x = 0.75; $x <= 4.00; $x = $x + 0.25) {
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
                  <option>kom</option>
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
              <div class="form-group col-md-5">
                <strong><label>Tretmani i bojenja #1</label></strong>
                <input name="tretman1" title="Unesite tretman ili bojenja" type="text" class="form-control2" id="tretman1">
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-5">
                <strong><label>Tretmani i bojenja #2</label></strong>
                <input name="tretman2" title="Unesite tretman ili bojenja" type="text" class="form-control2" id="tretman2">
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
            <button type='button' onclick="return checkForm2();" id='dugmeNaruci' class='btn btn-success'><i class="fa fa-save"></i>&nbsp;Sačuvaj stavku</button>
          </div>
        </div>

        <div class="tabelaSpecijala2">
          <strong>NAPOMENA:</strong></br>
          -OD(za desno oko)</br>
          -OS(za lijevo oko)</br>
          -OU(obostrano)</br>
          -SPH(sferna dioptrija)</br>
          -CYL(cilindrična dioptrija)</br>
          -Ax(ugao cilindra)</br>
          -Add(adicija)</br>
          </br>
          <label class="obavezna_polja">* Obavezna polja su:</label></br>
          -OD/OS/OU</br>
          -Vrsta sočiva</br>
          -Dizajn</br>
          -Index</br>
          -Prečnik</br>
          -Količina</br>
          -MPC po komadu</br>
          -Broj radnog naloga</br>
          </br>
          Kod Progresiva</br>
          - Visina ugradnje</br>
          - PD</br>
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
  $('#label_zvjezdica1,#label_zvjezdica2').hide();
  var $select2 = $('#select2'),
    $select12 = $('#select12');
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

  $select12.on('change', function() {
    if ($('#select12').find("option:selected").text().length != 0) {
      $('#label_zvjezdica1').show();
    } else {
      $('#label_zvjezdica1').hide();
    }

    if ((($('#select2').find("option:selected").text() == "Bifokal") || ($('#select2').find("option:selected").text() == "Progresiv")) && ($('#select12').find("option:selected").text().length != 0)) {
      $('#label_zvjezdica2').show();
    } else if ((($('#select2').find("option:selected").text() == "Bifokal") || ($('#select2').find("option:selected").text() == "Progresiv")) && ($('#select12').find("option:selected").text().length == 0)) {
      $('#label_zvjezdica2').hide();
    }

  }).trigger('change');
</script>

</html>