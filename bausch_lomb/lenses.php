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
          <h1 class="h3 mb-4 text-gray-800">Bausch Lomb</h1>

          <div class='tabelaSpecijala1'>
            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>OD / OS</label></strong><label class="obavezna_polja">*</label>
                <select name="od_os_ou" title="OD - za desno oko, OS - za lijevo oko" class="form-control" id="select1">
                  <option>OD</option>
                  <option>OS</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <input name="id_stavke" type="hidden" class="form-control" id="id_stavke" value="">
              </div>
              <div class="form-group col-md-2">
                <input name="proizvodjac" type="hidden" class="form-control" id="proizvodjac" value="3">
              </div>
              <div class="form-group col-md-2">
                <input name="lensesType" type="hidden" class="form-control" id="lensesType" value="">
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label id='labelPeriod'>Period:</label></strong><label class="obavezna_polja">*</label>
                <select name="period" title="Izaberite period" type="text" class="form-control" id="period">
                  <option default></option>
                  <option value="dnevna">Dnevna</option>
                  <option value="15dana">15 dana</option>
                  <option value="mjesec">Mjesec</option>
                  <option value="3mjeseca">3 mjeseca</option>
                  <option value="godina">Godina</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-6">
                <strong><label id='labelType'>Tip/vrsta:</label></strong><label class="obavezna_polja">*</label>
                <select name="tip" title="Izaberite tip/vrstu sočiva" type="text" class="form-control" id="tip">
                  <option></option>
                </select>
              </div>
            </div>


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>SPH</label></strong>
                <select name="sph" title="Unesite Sfernu dioptriju" class="form-control" id="select11">
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
                  <option>+3.25</option>
                  <option>+3.50</option>
                  <option>+3.75</option>
                  <option>+4.00</option>
                  <option>+4.25</option>
                  <option>+4.50</option>
                  <option>+4.75</option>
                  <option>+5.00</option>
                  <option>+5.25</option>
                  <option>+5.50</option>
                  <option>+5.75</option>
                  <option>+6.00</option>
                  <option>+6.25</option>
                  <option>+6.50</option>
                  <option>+6.75</option>
                  <option>+7.00</option>
                  <option>+7.25</option>
                  <option>+7.50</option>
                  <option>+7.75</option>
                  <option>+8.00</option>
                  <option>+8.25</option>
                  <option>+8.50</option>
                  <option>+8.75</option>
                  <option>+9.00</option>
                  <option>+9.25</option>
                  <option>+9.50</option>
                  <option>+9.75</option>
                  <option>+10.00</option>
                  <option>+10.25</option>
                  <option>+10.50</option>
                  <option>+10.75</option>
                  <option>+11.00</option>
                  <option>+11.25</option>
                  <option>+11.50</option>
                  <option>+11.75</option>
                  <option>+12.00</option>
                  <option>+12.50</option>
                  <option>+13.00</option>
                  <option>+13.50</option>
                  <option>+14.00</option>
                  <option>+14.50</option>
                  <option>+15.00</option>
                  <option>+15.50</option>
                  <option>+16.00</option>
                  <option> 0.00</option>
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
                <strong> <label>CYL</label></strong>
                <select name="cyl" title="Unesite Cilindričnu dioptriju " class="form-control" id="select12">
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
                  <option>+3.25</option>
                  <option>+3.50</option>
                  <option>+3.75</option>
                  <option>+4.00</option>
                  <option>+4.25</option>
                  <option>+4.50</option>
                  <option>+4.75</option>
                  <option>+5.00</option>
                  <option>+5.25</option>
                  <option>+5.50</option>
                  <option>+5.75</option>
                  <option>+6.00</option>
                  <option> 0.00</option>
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
                <strong><label id='labelUgao'>Ugao:</label></strong>
                <input name="ugao" title="Unesite ugao" type="text" class="form-control2" id="ugao" />
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label id='labelBc'>BC:</label></strong><label class="obavezna_polja">*</label>
                <input list="ispisBc" name="bc" title="Unesite baznu krivinu" type="text" class="form-control2" id="bc" />
                <datalist id="ispisBc"></datalist>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label id='labelSize'>TD:</label></strong><label class="obavezna_polja">*</label>
                <input name="velicina" title="Unesite veličinu" type="text" class="form-control2" id="velicina" />
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>Jedinica mjere</label></strong>
                <select name="jm" title="Unesite jedinicu mjere" class="form-control" id="select14">
                  <option default>kutija</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>Količina</label></strong><label class="obavezna_polja">*</label>
                <input name="kolicina" maxlength="2" title="Unesite potrebnu količinu" type="text" class="form-control2" id="kolicina">
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
                <strong><label>Broj radnog naloga (№) </strong></label>
                <input name="broj_radnog_naloga" maxlength='30' class="form-control2" type="text" title="Unesite broj radnog naloga" id="broj_radnog_naloga" placeholder="" />
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-5">
                <strong><label>Napomena</label></strong>
                <textarea name="napomena" class="form-control" type="text" title="NAPOMENA: Ovdje unosite: Stepen zatamnjenja; Decentracija; Ime i prezime; Vrijeme isporuke itd." id="napomena" row="4"></textarea>
              </div>
            </div>
            <button type='button' onclick="return checkFormLenses();" id='dugmeNaruci' class='btn btn-success'><i class="fa fa-save"></i>&nbsp;Sačuvaj stavku</button>
          </div>
        </div>


        <div class="tabelaSpecijala2">
          <strong>NAPOMENA:</strong></br>
          -SPH (sferna dioptrija)</br>
          -CYL (cilindrična dioptrija)</br>
          -BC (bazna krivina)</br>
          -TD (veličina)</br>
          </br>
          <label class="obavezna_polja">* Obavezna polja su:</label></br>
          -OD/OS</br>
          -Period</br>
          -Tip</br>
          -BC</br>
          -TD</br>
          -Količina</br>
          -MPC po komadu</br>
          </br>
          </br>

        </div>

        <!-- /.container-fluid -->
      </div>

      <div class="naslov">

        <?php
        include 'lensesOrderTable.php';
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
  /*******************************************************************************/
  $(document).ready(function() {
    //Funkcija koja se poziva kada se polje za period OD sočiva promijeni
    $("#period").change(function() {
      //Parametri potrebni za pretragu tipova sočiva (period i ID proizvođača sočiva) u tabeli sočiva
      var period = $('#period').val();
      var proizvodjac = $('#proizvodjac').val();
      if (period != "") {
        //Poziva se AJAX
        $.ajax({
          //AJAX metod je POST.
          type: "POST",
          //Podaci će biti poslati prema "ajaxTypeLenses.php".
          url: "ajaxTypeLenses.php",
          //Podaci koji će biti poslati
          data: {
            period: period,
            proizvodjac: proizvodjac
          },
          //Ako je rezultat pronađen vrijednosti opcija se smiještaju u izbornik tipova sočiva.
          success: function(html) {
            $("#tip").html(html).show();
            if (document.getElementById("lensesType").value.length > 0) {
              var lensesType = document.getElementById('lensesType').value;
              $("#tip option:contains('" + lensesType + "')").filter(function(i) {
                return $(this).text() === lensesType;
              }).attr("selected", true);
            }
          }
        });
      }
    });

    //Funkcija koja se poziva kada se polje za tip sočiva OD promijeni.
    $("#tip").change(function() {
      //Čišćenje vrijednosti polja (starih vrijednosti) bazne krivine, datalist bazne krivine i velicine sočiva.
      document.getElementById("bc").value = "";
      document.getElementById("velicina").value = "";
      $('#ispisBc').find('option').remove().end();
      //Incijalizacija promjenljive koja uzima vrijednost ID-a koji referencira na ID zapisa u tabeli sočiva.
      var tip = $("#tip").val();
      if (tip != "") {
        //Poziva se AJAX.
        $.ajax({
          //AJAX metod je POST.
          type: "POST",
          //Podaci će biti poslati prema "ajaxTypeLenses.php".
          url: "ajaxTypeLenses.php",
          //Podaci koji će biti poslati
          data: {
            tip: tip
          },
          //Ako je rezultat pronađen, promjenljiva koja je vraćena iz ajaxTypeLenses.php sadrži baznu krivinu i veličinu sočiva pa je potrebno istu razdvojiti na dva dijela.
          //Separator je @@@
          success: function(html) {
            var bcTd = html.split('@@@');
            //Prvi element se dodaje kao opcija u datalist bazne krivine OD.
            $("#ispisBc").append(bcTd[0]);
            //Drugi element se dodjeljuje kao vrijednost polja za veličinu sočiva OD.
            document.getElementById("velicina").value = bcTd[1];
          }
        });
      }
    });


    //Čišćenje vrijednosti polja ukoliko dođe do promjene select option
    var $period = $('#period');
    $period.on('change', function() {
      document.getElementById("bc").value = "";
      document.getElementById("velicina").value = "";
      $('#ispisBc').find('option').remove().end();
    });
  });
</script>

</html>