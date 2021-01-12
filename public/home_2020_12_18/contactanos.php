<?php include("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ESG - Contáctanos</title>

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
                        <img src="<?=base_url();?>public/img/img-contactanos.jpg" class="img-responsive" alt="...">
                    </div>
                </div>
            </div>

        </div>
        <main>

            <section class="contactanos">

                <div class="container">

                    <h2 class="text-center">
                        CONTACTANOS<br>
                        <img src="<?=base_url();?>public/img/icon-email.svg" width="50" class="img-center" >
                    </h2>

                    <div class="col-md-12 z99">
                        <div class="info text-center">

                            <form method="post">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nombres y Apellidos" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Correo electrónico" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Teléfono Fijo / Movil" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Asunto" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="8" placeholder="Mensaje" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn" type="submit">contáctanos ahora mismo!</button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id ipsum cursus, laoreet est id, molestie libero. Curabitur imperdiet ex lacus. Aliquam ut nisi nec erat placerat luctus.</p> -->
                                    <h6>correo</h6>
                                    <p>ganasco@esg.com.pe</p>
									<p>ventas2@esg.com.pe</p>
                                    <h6>teléfono</h6>
                                    <p>(+51) 547-8057</p>
                                    <h6>HORARIO</h6>
                                    <p>Lunes - Viernes</p>
                                    <p>8:15 a.m. a 6:00 p.m.</p>
                                    <p>Sabado</p>
                                    <p>8:15 a.m. a 12:30 p.m.</p>
                                    <h6>DIRECCIÓN</h6>
                                    <p>Calle la Pampilla 121-135</p>
                                    <p>Zona Industrial - Ventanilla - Callao</p>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

                <div class="container-fluid" id="mapCanvas">
                </div>

            </section>

        </main>

        <?php include("footer.php"); ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?=base_url();?>public/js/bootstrap.min.js"></script>
        <script src="<?=base_url();?>public/js/esg.min.js"></script>
        <script src="<?=base_url();?>public/js/jquery-scrollto.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_AVDoYSiEeQLRCdMp0cdyHN9D7sqW90o" type="text/javascript"></script>
        <script>
            function initMap() {
                //var myLatLngC = {lat: -12.086019, lng: -77.025015};
                var myLatLng = {lat: -11.868842, lng: -77.126666};

                var map = new google.maps.Map(document.getElementById('mapCanvas'), {
                    center: myLatLng,
                    scrollwheel: false,
                    zoom: 17
                });
                var img = {
                    url: '<?php echo base_url(); ?>public/img/icon-map.png',
                    size: new google.maps.Size(48, 62),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(0, 48)
                };
                var marker = new google.maps.Marker({
                    map: map,
                    icon: img,
                    position: myLatLng,
                    title: 'Hello World!'
                });
            }

            google.maps.event.addDomListener(window, 'load', initMap);
        </script>

    </body>
</html>