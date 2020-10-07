<!DOCTYPE html>
<html lang="en"><?php include '../narudzbenica/modules/header.php'; ?>

<body id="page-top">
    <div id="wrapper">
    <?php include '../narudzbenica/modules/menu.php'; ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"> <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"> <i class="fa fa-bars"></i> </button>
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow"> <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ulogovani ste kao <b><?php echo $imeKorisnika; ?></b> <i class="fas fa-user"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Odjava </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">1.50 Solea HC</h1>
                    <div class="tabela1">
                        <h5 id>1.50 Solea HC 65mm</h5>
                        <h6 id="cyl">+Cyl</h6>
                        <table class="table table-bordered table-condensed">
                            <tbody>
                                <tr>
                                    <td class="poljeTabele">Sph</td>
                                    <td class="poljeTabele">0.00</td>
                                    <td class="poljeTabele">0.25</td>
                                    <td class="poljeTabele">0.50</td>
                                    <td class="poljeTabele">0.75</td>
                                    <td class="poljeTabele">1.00</td>
                                    <td class="poljeTabele">1.25</td>
                                    <td class="poljeTabele">1.50</td>
                                    <td class="poljeTabele">1.75</td>
                                    <td class="poljeTabele">2.00</td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">4.00</td>
                                    <td class='poljeTabele'><input type='text' id='1' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">3.75</td>
                                    <td class='poljeTabele'><input type='text' id='2' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='3' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">3.50</td>
                                    <td class='poljeTabele'><input type='text' id='4' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='5' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='6' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">3.25</td>
                                    <td class='poljeTabele'><input type='text' id='7' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='8' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='9' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='10' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">3.00</td>
                                    <td class='poljeTabele'><input type='text' id='11' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='12' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='13' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='14' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='15' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">2.75</td>
                                    <td class='poljeTabele'><input type='text' id='16' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='17' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='18' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='19' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='20' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='21' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">2.50</td>
                                    <td class='poljeTabele'><input type='text' id='22' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='23' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='24' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='25' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='26' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='27' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='28' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">2.25</td>
                                    <td class='poljeTabele'><input type='text' id='29' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='30' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='31' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='32' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='33' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='34' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='35' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='36' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">2.00</td>
                                    <td class='poljeTabele'><input type='text' id='37' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='38' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='39' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='40' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='41' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='42' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='43' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='44' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='45' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">1.75</td>
                                    <td class='poljeTabele'><input type='text' id='46' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='47' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='48' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='49' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='50' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='51' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='52' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='53' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='54' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">1.50</td>
                                    <td class='poljeTabele'><input type='text' id='55' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='56' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='57' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='58' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='59' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='60' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='61' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='62' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='63' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">1.25</td>
                                    <td class='poljeTabele'><input type='text' id='64' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='65' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='66' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='67' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='68' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='69' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='70' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='71' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='72' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">1.00</td>
                                    <td class='poljeTabele'><input type='text' id='73' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='74' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='75' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='76' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='77' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='78' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='79' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='80' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='81' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">0.75</td>
                                    <td class='poljeTabele'><input type='text' id='82' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='83' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='84' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='85' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='86' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='87' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='88' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='89' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='90' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">0.50</td>
                                    <td class='poljeTabele'><input type='text' id='91' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='92' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='93' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='94' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='95' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='96' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='97' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='98' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='99' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">0.25</td>
                                    <td class='poljeTabele'><input type='text' id='100' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='101' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='102' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='103' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='104' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='105' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='106' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='107' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='108' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">0.00</td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class='poljeTabele'><input type='text' id='109' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='110' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='111' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='112' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='113' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='114' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='115' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='116' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">Sph</td>
                                    <td class="poljeTabele">0.00</td>
                                    <td class="poljeTabele">0.25</td>
                                    <td class="poljeTabele">0.50</td>
                                    <td class="poljeTabele">0.75</td>
                                    <td class="poljeTabele">1.00</td>
                                    <td class="poljeTabele">1.25</td>
                                    <td class="poljeTabele">1.50</td>
                                    <td class="poljeTabele">1.75</td>
                                    <td class="poljeTabele">2.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6 id="cyl2">+Cyl</h6>
                    </div>

                    <div class="tabela2">
                        <h5 id>1.50 Solea Ultra BackSide 65mm</h5>
                        <h6 id="cyl">+Cyl</h6>
                        <table class="table table-bordered table-condensed">
                            <tbody>
                                <tr>
                                    <td class="poljeTabele">Sph</td>
                                    <td class="poljeTabele">0.00</td>
                                    <td class="poljeTabele">0.25</td>
                                    <td class="poljeTabele">0.50</td>
                                    <td class="poljeTabele">0.75</td>
                                    <td class="poljeTabele">1.00</td>
                                    <td class="poljeTabele">1.25</td>
                                    <td class="poljeTabele">1.50</td>
                                    <td class="poljeTabele">1.75</td>
                                    <td class="poljeTabele">2.00</td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">4.00</td>
                                    <td class='poljeTabele'><input type='text' id='117' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">3.75</td>
                                    <td class='poljeTabele'><input type='text' id='118' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='119' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">3.50</td>
                                    <td class='poljeTabele'><input type='text' id='120' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='121' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='122' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">3.25</td>
                                    <td class='poljeTabele'><input type='text' id='123' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='124' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='125' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='126' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">3.00</td>
                                    <td class='poljeTabele'><input type='text' id='127' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='128' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='129' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='130' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='131' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">2.75</td>
                                    <td class='poljeTabele'><input type='text' id='132' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='133' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='134' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='135' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='136' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='137' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">2.50</td>
                                    <td class='poljeTabele'><input type='text' id='138' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='139' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='140' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='141' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='142' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='143' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='144' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">2.25</td>
                                    <td class='poljeTabele'><input type='text' id='145' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='146' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='147' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='148' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='149' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='150' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='151' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='152' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">2.00</td>
                                    <td class='poljeTabele'><input type='text' id='153' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='154' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='155' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='156' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='157' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='158' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='159' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='160' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='161' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">1.75</td>
                                    <td class='poljeTabele'><input type='text' id='162' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='163' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='164' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='165' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='166' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='167' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='168' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='169' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='170' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">1.50</td>
                                    <td class='poljeTabele'><input type='text' id='171' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='172' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='173' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='174' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='175' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='176' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='177' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='178' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='179' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">1.25</td>
                                    <td class='poljeTabele'><input type='text' id='180' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='181' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='182' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='183' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='184' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='185' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='186' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='187' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='188' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">1.00</td>
                                    <td class='poljeTabele'><input type='text' id='189' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='190' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='191' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='192' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='193' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='194' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='195' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='196' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='197' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">0.75</td>
                                    <td class='poljeTabele'><input type='text' id='198' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='199' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='200' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='201' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='202' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='203' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='204' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='205' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='206' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">0.50</td>
                                    <td class='poljeTabele'><input type='text' id='207' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='208' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='209' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='210' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='211' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='212' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='213' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='214' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='215' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">0.25</td>
                                    <td class='poljeTabele'><input type='text' id='216' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='217' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='218' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='219' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='220' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='221' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='222' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='223' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='224' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">0.00</td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class='poljeTabele'><input type='text' id='225' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='226' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='227' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='228' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='229' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='230' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='231' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='232' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">Sph</td>
                                    <td class="poljeTabele">0.00</td>
                                    <td class="poljeTabele">0.25</td>
                                    <td class="poljeTabele">0.50</td>
                                    <td class="poljeTabele">0.75</td>
                                    <td class="poljeTabele">1.00</td>
                                    <td class="poljeTabele">1.25</td>
                                    <td class="poljeTabele">1.50</td>
                                    <td class="poljeTabele">1.75</td>
                                    <td class="poljeTabele">2.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6 id="cyl2">+Cyl</h6>
                    </div>
                    <div class="tabela3">
                        <h5 id>1.50 Solea HC 70mm</h5>
                        <h6 id="cyl">+Cyl</h6>
                        <table class="table table-bordered table-condensed">
                            <tbody>
                                <tr>
                                    <td class="poljeTabele">Sph</td>
                                    <td class="poljeTabele">0.00</td>
                                    <td class="poljeTabele">0.25</td>
                                    <td class="poljeTabele">0.50</td>
                                    <td class="poljeTabele">0.75</td>
                                    <td class="poljeTabele">1.00</td>
                                    <td class="poljeTabele">1.25</td>
                                    <td class="poljeTabele">1.50</td>
                                    <td class="poljeTabele">1.75</td>
                                    <td class="poljeTabele">2.00</td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">0.00</td>
                                    <td class='poljeTabele'><input type='text' id='233' class='form-control' /></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-0.25</td>
                                    <td class='poljeTabele'><input type='text' id='234' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='235' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='236' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='237' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='238' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='239' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='240' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='241' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='242' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-0.50</td>
                                    <td class='poljeTabele'><input type='text' id='243' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='244' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='245' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='246' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='247' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='248' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='249' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='250' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='251' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-0.75</td>
                                    <td class='poljeTabele'><input type='text' id='252' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='253' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='254' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='255' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='256' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='257' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='258' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='259' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='260' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-1.00</td>
                                    <td class='poljeTabele'><input type='text' id='261' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='262' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='263' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='264' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='265' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='266' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='267' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='268' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='269' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-1.25</td>
                                    <td class='poljeTabele'><input type='text' id='270' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='271' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='272' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='273' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='274' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='275' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='276' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='277' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='278' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-1.50</td>
                                    <td class='poljeTabele'><input type='text' id='279' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='280' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='281' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='282' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='283' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='284' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='285' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='286' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='287' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-1.75</td>
                                    <td class='poljeTabele'><input type='text' id='288' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='289' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='290' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='291' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='292' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='293' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='294' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='295' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='296' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-2.00</td>
                                    <td class='poljeTabele'><input type='text' id='297' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='298' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='299' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='300' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='301' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='302' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='303' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='304' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='305' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-2.25</td>
                                    <td class='poljeTabele'><input type='text' id='306' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='307' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='308' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='309' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='310' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='311' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='312' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='313' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='314' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-2.50</td>
                                    <td class='poljeTabele'><input type='text' id='315' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='316' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='317' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='318' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='319' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='320' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='321' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='322' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='323' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-2.75</td>
                                    <td class='poljeTabele'><input type='text' id='324' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='325' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='326' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='327' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='328' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='329' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='330' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='331' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='332' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-3.00</td>
                                    <td class='poljeTabele'><input type='text' id='333' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='334' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='335' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='336' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='337' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='338' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='339' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='340' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='341' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-3.25</td>
                                    <td class='poljeTabele'><input type='text' id='342' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='343' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='344' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='345' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='346' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='347' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='348' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='349' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='350' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-3.50</td>
                                    <td class='poljeTabele'><input type='text' id='351' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='352' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='353' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='354' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='355' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='356' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='357' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='358' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='359' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-3.75</td>
                                    <td class='poljeTabele'><input type='text' id='360' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='361' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='362' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='363' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='364' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='365' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='366' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='367' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='368' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-4.00</td>
                                    <td class='poljeTabele'><input type='text' id='369' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='370' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='371' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='372' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='373' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='374' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='375' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='376' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='377' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">Sph</td>
                                    <td class="poljeTabele">0.00</td>
                                    <td class="poljeTabele">0.25</td>
                                    <td class="poljeTabele">0.50</td>
                                    <td class="poljeTabele">0.75</td>
                                    <td class="poljeTabele">1.00</td>
                                    <td class="poljeTabele">1.25</td>
                                    <td class="poljeTabele">1.50</td>
                                    <td class="poljeTabele">1.75</td>
                                    <td class="poljeTabele">2.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6 id="cyl2">+Cyl</h6>
                    </div>
                    <div class="tabela4">
                        <h5 id>1.50 Solea Ultra BackSide 70mm</h5>
                        <h6 id="cyl">+Cyl</h6>
                        <table class="table table-bordered table-condensed">
                            <tbody>
                                <tr>
                                    <td class="poljeTabele">Sph</td>
                                    <td class="poljeTabele">0.00</td>
                                    <td class="poljeTabele">0.25</td>
                                    <td class="poljeTabele">0.50</td>
                                    <td class="poljeTabele">0.75</td>
                                    <td class="poljeTabele">1.00</td>
                                    <td class="poljeTabele">1.25</td>
                                    <td class="poljeTabele">1.50</td>
                                    <td class="poljeTabele">1.75</td>
                                    <td class="poljeTabele">2.00</td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">0.00</td>
                                    <td class='poljeTabele'><input type='text' id='378' class='form-control' /></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                    <td class="poljeTabele" style='border:none;'></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-0.25</td>
                                    <td class='poljeTabele'><input type='text' id='379' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='380' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='381' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='382' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='383' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='384' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='385' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='386' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='387' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-0.50</td>
                                    <td class='poljeTabele'><input type='text' id='388' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='389' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='390' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='391' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='392' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='393' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='394' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='395' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='396' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-0.75</td>
                                    <td class='poljeTabele'><input type='text' id='397' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='398' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='399' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='400' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='401' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='402' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='403' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='404' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='405' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-1.00</td>
                                    <td class='poljeTabele'><input type='text' id='406' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='407' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='408' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='409' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='410' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='411' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='412' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='413' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='414' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-1.25</td>
                                    <td class='poljeTabele'><input type='text' id='415' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='416' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='417' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='418' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='419' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='420' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='421' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='422' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='423' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-1.50</td>
                                    <td class='poljeTabele'><input type='text' id='424' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='425' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='426' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='427' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='428' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='429' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='430' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='431' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='432' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-1.75</td>
                                    <td class='poljeTabele'><input type='text' id='433' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='434' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='435' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='436' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='437' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='438' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='439' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='440' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='441' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-2.00</td>
                                    <td class='poljeTabele'><input type='text' id='442' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='443' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='444' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='445' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='446' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='447' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='448' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='449' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='450' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-2.25</td>
                                    <td class='poljeTabele'><input type='text' id='451' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='452' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='453' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='454' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='455' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='456' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='457' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='458' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='459' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-2.50</td>
                                    <td class='poljeTabele'><input type='text' id='460' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='461' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='462' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='463' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='464' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='465' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='466' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='467' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='468' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-2.75</td>
                                    <td class='poljeTabele'><input type='text' id='469' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='470' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='471' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='472' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='473' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='474' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='475' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='476' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='477' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-3.00</td>
                                    <td class='poljeTabele'><input type='text' id='478' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='479' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='480' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='481' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='482' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='483' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='484' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='485' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='486' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-3.25</td>
                                    <td class='poljeTabele'><input type='text' id='487' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='488' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='489' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='490' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='491' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='492' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='493' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='494' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='495' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-3.50</td>
                                    <td class='poljeTabele'><input type='text' id='496' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='497' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='498' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='499' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='500' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='501' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='502' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='503' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='504' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-3.75</td>
                                    <td class='poljeTabele'><input type='text' id='505' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='506' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='507' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='508' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='509' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='510' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='511' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='512' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='513' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">-4.00</td>
                                    <td class='poljeTabele'><input type='text' id='514' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='515' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='516' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='517' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='518' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='519' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='520' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='521' class='form-control' /></td>
                                    <td class='poljeTabele'><input type='text' id='522' class='form-control' /></td>
                                </tr>
                                <tr>
                                    <td class="poljeTabele">Sph</td>
                                    <td class="poljeTabele">0.00</td>
                                    <td class="poljeTabele">0.25</td>
                                    <td class="poljeTabele">0.50</td>
                                    <td class="poljeTabele">0.75</td>
                                    <td class="poljeTabele">1.00</td>
                                    <td class="poljeTabele">1.25</td>
                                    <td class="poljeTabele">1.50</td>
                                    <td class="poljeTabele">1.75</td>
                                    <td class="poljeTabele">2.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <h6 id="cyl2">+Cyl</h6>
                    </div>
                    <h1 id="naslovNarudzbenice">Narudžbenica</h1>
                    <hr> <?php include 'narudzbenicaLager.php'; ?>
                </div>
            </div>
        </div><?php include '../narudzbenica/modules/footer.php'; ?><script type="text/javascript">
            function add(a) {
                $.ajax({
                    type: "POST",
                    url: "addRow.php",
                    dataType: "json",
                    data: {
                        stavka: "12#" + a
                    },
                    success: function() {
                        location.reload()
                    },
                    error: function() {
                        location.reload(), window.location.href = "1.50_Solea_HC_Solea_Ultra_BackSide.php?msg=2"
                    }
                })
            }
        </script>
</body>

</html>