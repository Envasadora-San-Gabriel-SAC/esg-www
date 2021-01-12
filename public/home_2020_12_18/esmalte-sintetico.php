<?php include("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ESG - Esmalte Sintetico</title>

        <!-- Bootstrap -->
        <link href="public/css/bootstrap.css" rel="stylesheet" />
        <link href="public/css/esg.min.css" rel="stylesheet" />

        <script src="public/js/modernizr.min.js" type='text/javascript'></script>
        <script src="public/js/css3-mediaqueries.js" type='text/javascript'></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container-fluid hidden-md hidden-lg menu-responsive">
            <div class="col-xs-12 col-sm-12 text-center">
                <a href="<?=base_url();?>"><img src="public/img/logo-responsive.png" width="80" class="img-center"></a>
                <button class="btn btn-menu" onclick="javascript:openMenu();" type="button">
                    <img src="public/img/icon-menu.svg" width="32" alt="" class="img-center">
                </button>
                <button class="btn btn-close hidden" onclick="javascript:closeMenu();" type="button">
                    <img src="public/img/icon-close.svg" width="32" alt="" class="img-center">
                </button>
            </div>
        </div>

        <?php include("menu-responsive.php"); ?>

        <header class="container-fluid hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <nav id="navbar" class="navbar collapse navbar-collapse text-center">
                            <ul class="nav">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown">Nosotros</a>
                                    <ul class="dropdown-menu multi-level">
                                        <li class="dropdown-submenu">
                                            <a href="quienes-somos.php">
                                                quienes-somos
                                            </a>
										</li>
										<li class="dropdown-submenu">
                                            <a  href="http://www.esg.com.pe/Politica0403.pdf">
                                                politicas sig
                                            </a>
										</li>	
									</ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown">productos y servicios</a>
                                    <ul class="dropdown-menu multi-level">
                                        <li class="dropdown-submenu">
                                            <a href="#">
                                                Distribución y comercialización de combustibles
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a href="abastecimiento-tanques.php">abastecimiento a tanques estacionarios</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="abastecimiento-maquinas.php">abastecimiento a maquinaria pesada</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">pinturas clark</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Latex y Bases</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown-submenu">
                                                            <a href="megalatex.php">Megalatex</a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a href="perfect-mate.php">perfect mate</a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a href="satinado.php">satinado</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">BASES</a>
                                                    <ul class="dropdown-menu">
                                                        <!--<li class="dropdown-submenu">
                                                            <a href="imprimante.php">imprimante</a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a href="temple.php">temple</a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a href="temple-fino.php">temple fino</a>
                                                        </li>-->
                                                        <li class="dropdown-submenu">
                                                            <a href="pasta-mural.php">pasta mural</a>
                                                        </li>
                                                        <!--<li class="dropdown-submenu">
                                                            <a href="sellador.php">sellador y sellador acrílico</a>
                                                        </li>-->
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ESMALTES SINTÉTICOS</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown-submenu">
                                                            <a href="esmalte-sintetico.php">ESMALTE ALTO BRILLO</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">GLOSs</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="gloss.php">GLOSS</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">OLEO MATE</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="oleo-mate.php">OLEO MATE</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">anticorrosivo</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="esmalte-anticorrosivo.php">esmalte anticorrosivo</a>
                                                        </li>
                                                        <li>
                                                            <a href="zincromato-industrial.php">zincromato industrial</a>
                                                        </li>
                                                        <li>
                                                            <a href="zincromato-automotriz.php">zincromato automotriz</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">PINTURA TRÁFICO</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown-submenu">
                                                            <a href="trafico-alto-transito.php">TRÁFICO ALTO TRANSITO</a>
                                                        </li>
                                                        <!--<li class="dropdown-submenu">
                                                            <a href="trafico-alto-transito-ttp.php">TRÁFICO ALTO TRANSITO TTP</a>
                                                        </li>-->
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="resinas.php">
                                                Resinas
                                            </a>
                                            <!-- <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a href="resina-ug-500.php">Resina UG-500</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="resina-tr-600.php">resina tr-600</a>
                                                </li>
                                            </ul> -->
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="quimicos.php">
                                            Productos químicos</a>
                                            <!--<ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a href="monomero-estireno.php">monomero estireno</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="solventes-diluyentes.php">solventes y diluyentes</a>
                                                </li>
                                            </ul>-->
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="brand">
                                        <a href="<?=base_url();?>"><img src="<?=base_url();?>public/img/logo.png" alt="" class="img-responsive img-center"></a>
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                </li>
                                <li><a href="<?=base_url();?>nuestros-clientes.php">nuestros clientes</a></li>
                                <li><a href="<?=base_url();?>contactanos.php">contactanos</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-fluid" id="slider">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?=base_url();?>public/img/bg_producto2.jpg" class="img-responsive" alt="...">
                    </div>
                </div>
            </div>

        </div>
        <main>

            <section class="container producto">

                <div class="col-md-12 breancrumb">
                    <h4 class="text-center">
                        Pinturas clark / Esmaltes sinteticos/ <span>Esmalte sintetico</span>
                    </h4>
                </div>

                <div class="col-md-6 info info-azul">
                    <h2>ficha tecnica</h2>
                    <p>Pintura de acabado mate. Para uso de interiores y exteriores, fórmula elaborada para un mayor rendimiento y durabilidad.</p>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>PROPIEDADES FÍSICO - QUÍMICAS</th>
                                    <th>ESPECIFICACIÓN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sólidos por peso, %</td>
                                    <td>32 - 36</td>
                                </tr>
                                <tr>
                                    <td>Viscosidad</td>
                                    <td>100 - 110</td>
                                </tr>
                                <tr>
                                    <td>Densidad (Kg/Gln)</td>
                                    <td>5.7 6.1</td>
                                </tr>
                                <tr>
                                    <td>Secado al tacto (Hrs)</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Secado a duro (Hrs)</td>
                                    <td>24</td>
                                </tr>
                                <tr>
                                    <td>Repintado (Hrs)</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>Rendimiento teórico</td>
                                    <td>40 m2/Gln a 1 mil seco</td>
                                </tr>
                                <tr>
                                    <td>Vida útil en almacenaje</td>
                                    <td>Hasta 12 meses*</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr><td colspan="2">* En envase bien cerrado y expuesto a temperaturas entre 4° - 38° C.</td></tr>
                            </tfoot>
                        </table>
                    </div>

                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <span class="img pull-left"><img src="public/img/superficies.svg" alt="" class="img-responsive"></span>
                                <span class="text">Este producto puede ser usado para el pintado sobre cemento, ladrillo, yeso, madera.</span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="img pull-left"><img src="public/img/limpiar.svg" alt="" class="img-responsive"></span>
                                <span class="text">La superficie a pintar debe de estar libre de suciedad, grasa, aceite, óxido, pintura suelta, humedad y cualquier otro material extraño.</span>
                            </p>
                        </li>
                        <li>
                            <p>
                            <span class="pull-left img"><img src="public/img/brocha.svg" alt="" class="img-responsive"></span>
                            <span class="text">La brocha, rodillo o pistola a usar se debe encontrar en buen estado.</span>
                            </p>
                        </li>
                    </ul>

                </div>

                <div class="col-md-6 img">
                    <img src="public/img/productos/esmalte-sintetico.jpg" alt="" class="img-responsive pull-right">
                </div>

            </section>


        </main>

        <?php include("footer.php");?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?=base_url();?>public/js/bootstrap.min.js"></script>
        <script src="<?=base_url();?>public/js/esg.min.js"></script>
        <script src="<?=base_url();?>public/js/jquery-scrollto.js"></script>
    </body>
</html>