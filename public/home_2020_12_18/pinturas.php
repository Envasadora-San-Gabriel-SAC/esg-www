<?php include("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ESG - Quienes Somos</title>

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
                                <li><a href="<?=base_url();?>quienes-somos">quienes somos</a></li>
                                <li class="dropdown">
                                    <a class="active dropdown-toggle" data-toggle="dropdown">productos y servicios</a>
                                    <ul class="dropdown-menu multi-level">
                                        <li class="dropdown-submenu">
                                            <a href="distribucion-y-comercializacion-de-combustibles">
                                                Distribución y comercialización de combustibles
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a href="tanques-estacionarios">abastecimiento a tanques estacionarios</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="maquinaria-pesada">abastecimiento a maquinaria pesada</a>
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
                                                            <a href="megalatex">Megalatex</a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a href="perfect-mate">perfect mate</a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a href="satinado">satinado</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">BASES</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown-submenu">
                                                            <a href="imprimante">imprimante</a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a href="temple">temple</a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a href="temple-fino">temple fino</a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a href="pasta-mural">pasta mural</a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a href="sellador">sellador y sellador acrílico</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ESMALTES SINTÉTICOS</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown-submenu">
                                                            <a href="esmalte-sintetico">ESMALTE ALTO BRILLO</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">GLOSs</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="gloss">GLOSS</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">OLEO MATE</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="oleo-mate">OLEO MATE</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">anticorrosivo</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="esmalte-anticorrosivo">esmalte anticorrosivo</a>
                                                        </li>
                                                        <li>
                                                            <a href="zincromato-industrial">zincromato industrial</a>
                                                        </li>
                                                        <li>
                                                            <a href="zincromato-automotriz">zincromato automotriz</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">PINTURA TRÁFICO</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown-submenu">
                                                            <a href="trafico-alto-transito">TRÁFICO ALTO TRANSITO</a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a href="trafico-alto-transito-ttp">TRÁFICO ALTO TRANSITO TTP</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="servicio-pintado">Servicio de pintado</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="servicios-de-pintado-y-revestimiento-de-tanques-y-otro">
                                                Resina y revestimiento de tanques
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a href="revestimiento-tanques">revestimiento de tanques</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="resina-ug-500">Resina UG-500</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="resina-tr-600">resina tr-600</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="productos-quimico-resinas-moromeros-solventes-y-diluyentes">
                                            Productos químicos</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a href="monomero-estireno">monomero estireno</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="solventes-diluyentes">solventes y diluyentes</a>
                                                </li>
                                            </ul>
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
                                <li><a href="<?=base_url();?>nuestros-clientes">nuestros clientes</a></li>
                                <li><a href="<?=base_url();?>descubre-clark">descubre clark</a></li>
                                <li><a href="https://www.efact.pe/consult.html/">Factura</a></li>  
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

            <section class="container quienes-somos">

                <h2 class="text-center">
                    PINTURAS<br>
                    <img src="<?=base_url();?>public/img/icon-s2-1.svg" width="50" class="img-center" >
                </h2>

                <div class="col-md-8 col-md-offset-2 z99">
                    <div class="info text-center">
                        <p>Los productos CLARK están cientificamente formulados y tienen estrictos controles de calidad. Nuestro compromiso es elaborar pinturas eco amigables que ayuden a preservar el medio ambiente.</p>
                    </div>
                </div>

                <div class="col-md-12 group-links">
                    <div class="col-md-12 text-left">
                        <h2 class="title">Latex y Bases</h2>
                        <a href="megalatex" class="enlace">Megalatex</a>
                        <a href="perfect-mate" class="enlace">Perfect Mate</a>
                        <a href="satinado" class="enlace">Satinado</a>
                    </div>

                    <div class="col-md-12 text-left">
                        <h2 class="title">Bases</h2>
                        <a href="imprimante" class="enlace">Imprimante</a>
                        <a href="temple" class="enlace">Temple</a>
                        <a href="temple-fino" class="enlace">Temple Fino</a>
                        <a href="pasta-mural" class="enlace">Pasta Mural</a>
                        <a href="sellador" class="enlace">Sellador y Sellador Acrílico</a>
                    </div>

                    <div class="col-md-12 text-left">
                        <h2 class="title">ESMALTES SINTÉTICOS</h2>
                        <a href="esmalte-sintetico" class="enlace">Esmalte Alto Brillo</a>
                    </div>

                    <div class="col-md-12 text-left">
                        <h2 class="title">GLOSS</h2>
                        <a href="gloss" class="enlace">Gloss</a>
                    </div>

                    <div class="col-md-12 text-left">
                        <h2 class="title">OLEO MATE</h2>
                        <a href="oleo-mate" class="enlace">Oleo Mate</a>
                    </div>

                    <div class="col-md-12 text-left">
                        <h2 class="title">anticorrosivo</h2>
                        <a href="esmalte-anticorrosivo" class="enlace">Esmalte Anticorrosivo</a>
                        <a href="zincromato-industrial" class="enlace">Zincromato Industrial</a>
                        <a href="zincromato-automotriz" class="enlace">Zincromato Automotriz</a>
                    </div>

                    <div class="col-md-12 text-left">
                        <h2 class="title">PINTURA TRÁFICO</h2>
                        <a href="trafico-alto-transito" class="enlace">Tráfico Alto Transito</a>
                        <a href="trafico-alto-transito-ttp" class="enlace">Tráfico Alto Transito TTP</a>
                    </div>

                    <div class="col-md-12 text-left">
                        <h2 class="title">servicio de pintado</h2>
                        <a href="servicio-pintado" class="enlace">Servicio de Pintado</a>
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