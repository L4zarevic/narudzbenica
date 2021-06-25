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
          <h1 class="h3 mb-4 text-gray-800">Rezervni dijelovi</h1>

          <div class='tabelaSpecijala1'>
            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>Brend</label></strong><label class="obavezna_polja">*</label>
                <input name="brend" title="Unesite brend" type="text" class="form-control2" id="brend">
              </div>
              <div class="form-group col-md-2">
                <input name="id_stavke" type="hidden" class="form-control" id="id_stavke" value="">
              </div>
            </div>
            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>Model</label></strong><label class="obavezna_polja">*</label>
                <input name="model" title="Unesite model" type="text" class="form-control2" id="model">
              </div>
            </div>
            <div class="rowSpec">
              <div class="form-group col-md-3">
                <strong><label>Veličina</label></strong>
                <input name="velicina" title="Unesite veličina" type="text" class="form-control2" id="velicina">
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-5">
                <strong><label>Napomena</label></strong>
                <textarea name="napomena" class="form-control" type="text" title="NAPOMENA: Ovdje unosite: Stepen zatamnjenja; Decentracija; Ime i prezime; Vrijeme isporuke itd." id="napomena" row="4"></textarea>
              </div>
            </div>
            <label class="obavezna_polja">* Obavezna polja</label></br>
            <button type='button' onclick="return checkPartsForm();" id='dugmeNaruci' class='btn btn-success'><i class="fa fa-save"></i>&nbsp;Sačuvaj stavku</button>
          </div>

          <!-- /.container-fluid -->
        </div>

      </div>
      <div class="naslov">
        <?php
        include 'narudzbenica_rez_dijelovi.php';
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