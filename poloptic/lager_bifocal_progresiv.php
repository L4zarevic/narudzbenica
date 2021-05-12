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
                <label for="exampleFormControlSelect1">OD / OS / OU</label>
                <select name="od_os_ou" title="OD - za desno oko, OS - za lijevo oko, OU - ako je obostrano isto" class="form-control" id="select1">
                  <option>OD</option>
                  <option>OS</option>
                  <option>OU</option>
                </select>
              </div>
            </div>
            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect1">Vrsta sočiva</label>
                <select name="vrsta_sociva" title="Unesite vrstu sočiva" class="form-control" id="select2" required>
                  <option value="0" default></option>
                  <!--<option value="1">Monofokal</option>-->
                  <option value="2">Bifokal</option>
                  <option value="3">Progresiv</option>
                  <!--<option value="4">Lentikular</option>-->
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Vrsta materijala</label>
                <select name="materijal" title="Unesite vrstu materijala za recepturu" class="form-control" id="select3">
                  <option value="0" default></option>
                  <option value="1">1.50 HMC</option>
                  <!--<option value="1">Bijeli materijal UV420</option>-->
                  <option value="1">1.56 Photocromic gray HMC</option>
                  <!-- <option value="1">Photocromic brown</option>
                  <option value="1">Transitions VII gray</option>
                  <option value="1">Transitions VII brown</option>
                  <option value="1">Nupolar</option>
                  <option value="1">Polycarbonate</option>
                  <option value="1">Nupolar-Polycarbonate</option>
                  <option value="1">Mineralni materijali</option>
                  <option value="1">Photo gray mineralni materijali</option>
                  <option value="1">Photo brown mineralni materijali</option>
                  <option value="1"></option>


                  <option value="2">Bijeli materijal</option>
                  <option value="2">Transitions VII gray</option>
                  <option value="2">Transitions VII brown</option>
                  <option value="2">Polycarbonate</option>
                  <option value="2">Polycarbonate Transitions</option>
                  <option value="2"></option>

                  <option value="3">Bijeli materijal</option>
                  <option value="3">Transitions VII gray</option>
                  <option value="3">Transitions VII brown</option>
                  <option value="3">Polycarbonate</option>
                  <option value="3">Polycarbonate Transitions</option>
                  <option value="3"></option>-->
                </select>
              </div>
            </div>

            <!-- <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Dizajn</label>
                <select name="dizajn" title="Unesite vrstu dizajna" class="form-control" id="select4">
                  <option value="0"></option>
                  <option id="100" value="1">Standard UNC</option>
                  <option id="101" value="1">Panorama</option>
                  <option id="101" value="1">Anglera</option>
                  <option id="102" value="1">Matrix Mono</option>
                  <option id="102" value="1">Elegance</option>
                  <option value="1"></option>

                  <option id="100" value="2">Bifocal FT28</option>
                  <option id="100" value="2">Bifocal CT28</option>
                  <option id="101" value="2">Bifo Invisio</option>
                  <option value="2"></option>

                  <option id="100" value="3">Pollux</option>
                  <option id="100" value="3">Polaris</option>
                  <option id="101" value="3">Futura</option>
                  <option id="101" value="3">Infini</option>
                  <option id="102" value="3">Matrix Pro</option>
                  <option id="102" value="3">Sequel DBS</option>
                  <option id="102" value="3">Adapta DBS</option>
                  <option id="102" value="3">Varia 3D</option>
                  <option id="102" value="3">Varia Pro</option>
                  <option id="102" value="3">Mineralni progresiv</option>
                  <option value="3"></option>

                </select>
              </div>
            </div>-->

            <!-- <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Index</label>
                <select name="index" title="Unesite Index prelamanja" class="form-control" id="select8">
                  <option value="0"></option>
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
                <label for="exampleFormControlSelect2">Baza</label>
                <select name="baza" title="Unesite bazu sočiva" class="form-control" id="select7">
                  <option>4</option>
                  <option>4.5</option>
                  <option>5</option>
                  <option>5.5</option>
                  <option>6</option>
                  <option>6.5</option>
                  <option>7</option>
                  <option>7.5</option>
                  <option>8</option>
                  <option>8.5</option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label id="labelPrecnik" for="exampleFormControlSelect2">Prečnik mm</label>
                <select name="precnik1" title="Unesite prečnik" class="form-control" id="select9">
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

                <select name="precnik2" title="Unesite prečnik" class="form-control" id="select10">
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
                <label for="exampleFormControlSelect2">Visina ugradnje</label>
                <select name="visina" title="Visina ugradnje (ili koridor) Unesite Visinu ugradnje za progresive: 'Infini i sve progresive iz Orange Linea' ili koridor za klasične progresive (Futura,Pollux i Polaris)" class="form-control" id="select5">
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
            </div>-->

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">SPH</label>
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
                  <!--<option>+3.25</option>
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
                  <option>-30.00</option>-->
                </select>
              </div>
            </div>


            <!--  <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">CYL</label>
                <select name="cyl" title="Unesite Cilindričnu dioptriju sa popisa" class="form-control" id="select12">
                  <option></option>
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
                <label for="exampleFormControlSelect2">Ax</label>
                <input name="ugao" title="Unesite ugao cilindra" type="text" class="form-control" id="ugaoCilindra">
              </div>
            </div>-->


            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Add / Dig.</label>
                <select name="add" title="Dodajte adiciju ili digresiju za office progresive" class="form-control" id="select13">
                  <option default></option>
                  <!-- <option>0.75</option>-->
                  <option>1.00</option>
                  <option>1.25</option>
                  <option>1.50</option>
                  <option>1.75</option>
                  <option>2.00</option>
                  <option>2.25</option>
                  <option>2.50</option>
                  <option>2.75</option>
                  <option>3.00</option>
                  <!-- <option>3.25</option>
                  <option>3.50</option>
                  <option>3.75</option>
                  <option>4.00</option>-->
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Jedinica mjere</label>
                <select name="jm" title="Unesite jedinicu mjere" class="form-control" id="select14">
                  <option default>kom</option>
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
                <input name="kolicina" title="Unesite potrebnu količinu.Za 2 ili više komada, stavljajte na početku Ou - Obostrano isto!" type="text" class="form-control2" id="kolicina">
              </div>
            </div>

            <!-- <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Tretmani i bojenja #1</label>
                <select name="tretman1" class="form-control" id="select15">
                  <option value="100">HC</option>
                  <option value="100">MultiPlus</option>
                  <option value="100">UltraGlide</option>
                  <option value="100">NanoGlide</option>
                  <option value="100">PolarGlide</option>
                  <option value="100">BlueGlide</option>
                  <option value="100">PureGLide</option>
                  <option value="100">Ultra Glide BackSide</option>
                  <option value="100">Mirror/UltraBS</option>
                  <option value="100" disabled>--- Bojenje ---</option>
                  <option value="100">Unicolor</option>
                  <option value="100">Unicolor Hi index</option>
                  <option value="100">Color po uzorku</option>
                  <option value="100">Color po uzorku Hi index</option>
                  <option value="100">Gradient</option>
                  <option value="100">Gradient Hi index</option>
                  <option value="100"></option>

                  <option value="101">MultiPlus</option>
                  <option value="101">UltraGlide</option>
                  <option value="101">NanoGlide</option>
                  <option value="101">PolarGlide</option>
                  <option value="101">BlueGlide</option>
                  <option value="101">PureGLide</option>
                  <option value="101">Ultra Glide BackSide</option>
                  <option value="101">Mirror/UltraBS</option>
                  <option value="101" disabled>--- Bojenje ---</option>
                  <option value="101">Unicolor</option>
                  <option value="101">Unicolor Hi index</option>
                  <option value="101">Color po uzorku</option>
                  <option value="101">Color po uzorku Hi index</option>
                  <option value="101">Gradient</option>
                  <option value="101">Gradient Hi index</option>
                  <option value="101"></option>

                  <option value="102">UltraGlide</option>
                  <option value="102">NanoGlide</option>
                  <option value="102">PolarGlide</option>
                  <option value="102">BlueGlide</option>
                  <option value="102">PureGLide</option>
                  <option value="102">Ultra Glide BackSide</option>
                  <option value="102">Mirror/UltraBS</option>
                  <option value="102" disabled>--- Bojenje ---</option>
                  <option value="102">Unicolor</option>
                  <option value="102">Unicolor Hi index</option>
                  <option value="102">Color po uzorku</option>
                  <option value="102">Color po uzorku Hi index</option>
                  <option value="102">Gradient</option>
                  <option value="102">Gradient Hi index</option>
                  <option value="102"></option>
                </select>
              </div>
            </div>

            <div class="rowSpec">
              <div class="form-group col-md-3">
                <label for="exampleFormControlSelect2">Tretmani i bojenja #2</label>
                <select name="tretman2" class="form-control" id="select16">
                  <option value="100">HC</option>
                  <option value="100">MultiPlus</option>
                  <option value="100">UltraGlide</option>
                  <option value="100">NanoGlide</option>
                  <option value="100">PolarGlide</option>
                  <option value="100">BlueGlide</option>
                  <option value="100">PureGlide</option>
                  <option value="100">UltraGlide BackSide</option>
                  <option value="100">Mirror/UltraBS</option>
                  <option value="100" disabled>--- Bojenje ---</option>
                  <option value="100">Unicolor</option>
                  <option value="100">Unicolor Hi index</option>
                  <option value="100">Color po uzorku</option>
                  <option value="100">Color po uzorku Hi index</option>
                  <option value="100">Gradient</option>
                  <option value="100">Gradient Hi index</option>
                  <option value="100"></option>

                  <option value="101">MultiPlus</option>
                  <option value="101">UltraGlide</option>
                  <option value="101">NanoGlide</option>
                  <option value="101">PolarGlide</option>
                  <option value="101">BlueGlide</option>
                  <option value="101">PureGlide</option>
                  <option value="101">UltraGlide BackSide</option>
                  <option value="101">Mirror/UltraBS</option>
                  <option value="101" disabled>--- Bojenje ---</option>
                  <option value="101">Unicolor</option>
                  <option value="101">Unicolor Hi index</option>
                  <option value="101">Color po uzorku</option>
                  <option value="101">Color po uzorku Hi index</option>
                  <option value="101">Gradient</option>
                  <option value="101">Gradient Hi index</option>
                  <option value="101"></option>

                  <option value="102">UltraGlide</option>
                  <option value="102">NanoGlide</option>
                  <option value="102">PolarGlide</option>
                  <option value="102">BlueGlide</option>
                  <option value="102">PureGlide</option>
                  <option value="102">UltraGlide BackSide</option>
                  <option value="102">Mirror/UltraBS</option>
                  <option value="102" disabled>--- Bojenje ---</option>
                  <option value="102">Unicolor</option>
                  <option value="102">Unicolor Hi index</option>
                  <option value="102">Color po uzorku</option>
                  <option value="102">Color po uzorku Hi index</option>
                  <option value="102">Gradient</option>
                  <option value="102">Gradient Hi index</option>
                  <option value="102"></option>
                </select>
              </div>
            </div>-->

            <div class="rowSpec">
              <div class="form-group col-md-5">
                <label for="exampleFormControlSelect2">Napomena</label>
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
            <strong>Obavezna polja su:</strong></br>
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

    <!--<script type="text/javascript">
      var $select2 = $('#select2'),
        $select3 = $('#select3'),
        $select4 = $('#select4'),
        $select15 = $('#select15'),
        $select16 = $('#select16'),
        $options1 = $select3.find('option');
      $options2 = $select4.find('option');
      $options3 = $select15.find('option');
      $options4 = $select16.find('option');


      $select2.on('change', function() {
        $select3.html($options1.filter('[value="' + this.value + '"]'));
      }).trigger('change');

      $select2.on('change', function() {
        $select4.html($options2.filter('[value="' + this.value + '"]'));
      }).trigger('change');

      $select4.on('change', function() {
        var id = $(this).children(":selected").attr("id");
        $select15.html($options3.filter('[value="' + id + '"]'));
      }).trigger('change');

      $select4.on('change', function() {
        var id1 = $(this).children(":selected").attr("id");
        $select16.html($options4.filter('[value="' + id1 + '"]'));
      }).trigger('change');
    </script>-->

</body>

</html>