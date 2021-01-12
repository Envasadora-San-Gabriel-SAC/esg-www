<?php include("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ESG - Descubre Clark</title>
        <head>

         </head>
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
                                <li><a class="active" href="<?=base_url();?>nuestros-clientes.php">nuestros clientes</a></li>
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
                        <img src="<?=base_url();?>public/img/bg_nuestrosclientes.jpg" class="img-responsive" alt="...">
                    </div>
                </div>
            </div>

        </div>
        <main>

            <section class="container nuestros-clientes">

                <h2 class="text-center">
                    NUESTROS CLIENTES<br>
                    <img src="<?=base_url();?>public/img/icon-descubreclark.svg" width="50" class="img-center" >
                </h2>


                <div class="col-md-8 col-md-offset-2 z99">
                    <div class="info text-center">
                        <p>Cumplimos con altos estándares de calidad lo que nos ha permitido ganar la confianza y reconocimiento de nuestros clientes.</p>
                    </div>
                </div>


                <div class="col-md-12 z9 clientes">

                    <div id="carouselClientes" class="carousel slide hidden-xs hidden-sm">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c1.jpg" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c2.jpg" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c3.jpg" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c4.jpg" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c5.jpg" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c6.jpg" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c8.png" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c12.png" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">

                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c10.png" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c11.png" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c16.png" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c18.jpg" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c9.jpg" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c15.png" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c20.gif" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c19.jpeg" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">


                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c21.png" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c14.jpg" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c13.png" alt="" class="img-responsive img-center"></div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carouselClientes" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carouselClientes" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <div id="carouselClientes1" class="carousel slide hidden-xs hidden-md hidden-lg">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="col-md-3 col-sm-6"><img src="public/img/clientes/c1.jpg" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-sm-6"><img src="public/img/clientes/c2.jpg" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-sm-6"><img src="public/img/clientes/c3.jpg" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-sm-6"><img src="public/img/clientes/c4.jpg" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c5.jpg" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c6.jpg" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c8.png" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c9.jpg" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c10.png" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c11.png" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c12.png" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c13.png" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c14.jpg" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c15.png" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c16.png" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c18.jog" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c19.jpeg" alt="" class="img-responsive img-center"></div>
                                <div class="col-md-3 col-xs-6"><img src="public/img/clientes/c20.gif" alt="" class="img-responsive img-center"></div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carouselClientes1" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carouselClientes1" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <div id="carouselClientes2" class="carousel slide hidden-sm hidden-md hidden-lg">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c1.jpg" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c2.jpg" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c3.jpg" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c4.jpg" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c5.jpg" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c6.jpg" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c8.png" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c9.jpg" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c10.png" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c11.png" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c12.png" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c13.png" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c14.jpg" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c15.png" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c16.png" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c18.jpg" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c19.jpeg" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c20.gif" alt="" class="img-responsive img-center"></div>
                            </div>
                            <div class="item">
                                <div class="col-md-3 col-xs-12"><img src="public/img/clientes/c21.png" alt="" class="img-responsive img-center"></div>
                            </div>

                        </div>
                        <a class="left carousel-control" href="#carouselClientes2" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carouselClientes2" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>

            </section>

        </main>

        <?php include("footer.php"); ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?=base_url();?>public/js/bootstrap.min.js"></script>
        <script src="<?=base_url();?>public/js/esg.min.js"></script>
        <script src="<?=base_url();?>public/js/jquery-scrollto.js"></script>
    </body>
</html>