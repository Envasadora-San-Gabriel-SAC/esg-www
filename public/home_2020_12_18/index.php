<?php include("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
                <title>ESG - Envasadora San Gabriel S.R.L.</title>
				
				<meta property="og:title" content="ESG - Envasadora San Gabriel S.R.L.">
				<meta property="og:url" content="http://www.esg.com.pe/">
				<meta property="og:site_name" content="www.esg.com.pe">
                <!-- Bootstrap -->
                <link href="public/css/bootstrap.css" rel="stylesheet" />
                <link href="public/css/esg.min.css" rel="stylesheet" />

                <script src="public/js/modernizr.min.js" type='text/javascript'></script>
                <script src="public/js/css3-mediaqueries.js" type='text/javascript'></script>

				<link rel="stylesheet" href="css/style1.css">
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
                    <img src="public/img/icon-menu.svg" width="32" alt="" class="img-rigth">
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

                                    </div>
                                </li>
                               <!--  <li><a href="<?=base_url();?>nuestros-clientes">nuestros clientes</a></li>-->
                                <li><a href="<?=base_url();?>nuestros-clientes.php">nuestros clientes</a></li>
                                <li><a href="<?=base_url();?>contactanos.php">contactanos</a></li>
								
								<!--<li><a href="<?=base_url();?>WebSite1/personal/RegistroClientes.aspx">Cliet</a></li>
								<input type="submit" value="CLIENTE" onclick = "location='WebSite/personal'"/>
								<li><a href="http://localhost:8080/personal/RegistroClientes">Facturas</a></li> -->

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
              <!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
               <script>
                  (adsbygoogle = window.adsbygoogle || []).push({
                    google_ad_client: "ca-pub-2012238074429300",
                    enable_page_level_ads: true
                   });
               </script> -->
        </header>

        <main>

            <div class="container-fluid" id="lst_productos">

                <div class="container">

                    <div class="slider">

                        <ul class="accordion-group" id="accordion">
                            <li>
                                <div class="accordion-overlay s1"></div>
                                <section>
                                    <article>
                                        <p><img src="public/img/icon-s1.svg" width="48px"></p>
                                        <p>DISTRIBUCIÓN Y  COMERCIALIZACIÓN DE COMBUSTIBLES</p>
                                    </article>
                                </section>
                            </li>
                            <li>
                                <div class="accordion-overlay s2"></div>
                                <section>
                                    <article>
                                        <p><img src="public/img/icon-s2.svg" width="48px"></p>
                                        <p>PINTURAS</p>
                                    </article>
                                </section>
                            </li>
                            <li>
                                <div class="accordion-overlay s3"></div>
                                <section>
                                    <article>
                                        <p><img src="public/img/icon-s3.svg" width="48px"></p>
                                        <p>RESINA, REVESTIMIENTO  DE TANQUES Y OTROS</p>
                                    </article>
                                </section>
                            </li>
                            <li>
                                <div class="accordion-overlay s4"></div>
                                <section>
                                    <article>
                                        <p><img src="public/img/icon-s4.svg" width="48px"></p>
                                        <p>MONOMERO, SOLVENTES Y DILUYENTES</p>
                                    </article>
                                </section>
                            </li>
                        </ul>

                    </div>

                </div>

            </div>

            <div class="container-fluid subfooter">
                <div class="container">
                    <div class="col-md-3 col-sm-3">
                        <div class="fb-page" data-href="https://www.facebook.com/envasadorasangabriel/" data-height="255" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/envasadorasangabriel/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/envasadorasangabriel/">Facebook</a></blockquote></div>
                    </div>
                   <!-- 
                    <div class="col-md-3 col-sm-3">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OkWEBHe6aCw"></iframe>
                        </div>
                    </div>
                    -->
                    <!--<div class="col-md-3 col-sm-3 col-xs-12 center"><img src="public/img/img-noticias.jpg" alt="" class="img-responsive img-center"></div>-->
                    <div class="col-md-3 col-sm-3">
                        <a href="contactanos.php"><img src="public/img/img-servicioalcliente.jpg" alt="" class="img-responsive img-center"></a>
                    </div>
                </div>
            </div>

        </main>

        <?php include("footer-home.php"); ?>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=1790353514532599";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?=base_url();?>public/js/bootstrap.min.js"></script>
        <script src="<?=base_url();?>public/js/esg.min.js"></script>
        <script src="<?=base_url();?>public/js/jquery-scrollto.js"></script>
    </body>
</html>