{{-- https://demo.createx.studio/around/demo-product-software.html --}}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Around | Product Landing - Software</title>
        <!-- SEO Meta Tags-->
        <meta name="description" content="Around - Multipurpose Bootstrap Template">
        <meta name="keywords" content="bootstrap, business, consulting, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, multipurpose, product landing, shop, software, ui kit, web studio, landing, html5, css3, javascript, gallery, slider, touch, creative">
        <meta name="author" content="Createx Studio">
        <!-- Viewport-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon and Touch Icons-->
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
        <meta name="msapplication-TileColor" content="#766df4">
        <meta name="theme-color" content="#ffffff">
        <!-- Page loading styles-->
        <style>
        .cs-page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }
        .cs-page-loading.active {
            opacity: 1;
            visibility: visible;
        }
        .cs-page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }
        .cs-page-loading.active > .cs-page-loading-inner {
            opacity: 1;
        }
        .cs-page-loading-inner > span {
            display: block;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: normal;
            color: #737491;
        }
        .cs-page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #766df4;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }
        @-webkit-keyframes spinner {
            100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
            }
        }
        @keyframes spinner {
            100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
            }
        }
        
        </style>
        <!-- Page loading scripts-->
        <script>
        (function () {
            window.onload = function () {
            var preloader = document.querySelector('.cs-page-loading');
            preloader.classList.remove('active');
            setTimeout(function () {
                preloader.remove();
            }, 2000);
            };
        })();
        
        </script>
        <!-- Vendor Styles-->
        <link rel="stylesheet" media="screen" href="{{ asset('vendor/fontawesome-free//css/all.min.css') }}"/>
        <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/simplebar.min.css') }}"/>
        <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/tiny-slider.css') }}"/>
        <link rel="stylesheet" media="screen" href="{{ asset('vendor/lightgallery/css/lightgallery.min.css') }}"/>
        <!-- Main Theme Styles + Bootstrap-->
        <link rel="stylesheet" media="screen" href="{{ asset('vendor/bootstrap/css/theme.min.css') }}"/>
        @yield('header')
        @yield('style')
    </head>
    <!-- Body-->
    <body>
     
        <!-- Page loading spinner-->
        <div class="cs-page-loading active">
            <div class="cs-page-loading-inner">
                <div class="cs-page-spinner"></div><span>Cargando...</span>
            </div>
        </div>
    <main class="cs-page-wrapper">
       
        <!-- Navbar (Floating dark)-->
        
        @yield('container')
      <!-- Page content-->
    </main>
    <!-- Footer-->
    <!-- Footer-->
     




        <footer class="cs-footer bg-dark  ">
          
          <div class="bg-darker pt-2">
            <div class="container py-sm-3">
              <div class="row pb-4 mb-2 pt-5 py-md-5">
                <div class="col-md-3 col-sm-6 mb-4">
                  <div class="media align-items-center"><i class="fe-truck text-primary" style="font-size: 2.125rem;"></i>
                    <div class="media-body pl-3">
                      <h6 class="font-size-base text-light mb-1">Fast and free delivery</h6>
                      <p class="mb-0 font-size-xs text-light opacity-50">Free delivery for all orders over $200</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                  <div class="media align-items-center"><i class="fe-refresh-cw text-primary" style="font-size: 2.125rem;"></i>
                    <div class="media-body pl-3">
                      <h6 class="font-size-base text-light mb-1">Money back guarantee</h6>
                      <p class="mb-0 font-size-xs text-light opacity-50">We return money within 30 days</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                  <div class="media align-items-center"><i class="fe-life-buoy text-primary" style="font-size: 2.125rem;"></i>
                    <div class="media-body pl-3">
                      <h6 class="font-size-base text-light mb-1">24/7 customer support</h6>
                      <p class="mb-0 font-size-xs text-light opacity-50">Friendly 24/7 customer support</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                  <div class="media align-items-center"><i class="fe-credit-card text-primary" style="font-size: 2.125rem;"></i>
                    <div class="media-body pl-3">
                      <h6 class="font-size-base text-light mb-1">Secure online payment</h6>
                      <p class="mb-0 font-size-xs text-light opacity-50">We possess SSL / Secure сertificate</p>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="hr-light mb-5">
              <div class="d-sm-flex align-items-center mb-4 pb-3">
                <div class="d-flex flex-wrap align-items-center mr-3"><a class="d-block mr-grid-gutter mt-n1 mb-3" href="{{ url('') }}" style="width: 40px;"><img src="{{ asset('images/logo/logo-brand-dark.png') }}" alt="Around"></a>
                  <ul class="list-inline font-size-sm pt-2 mb-3">
                    <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="{{ route('nosotros') }}">Nosotros</a></li>
                    <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="{{ route('productos') }}">Productos</a></li>
                    <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="{{ route('clientes') }}">Clientes</a></li>
                    <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="{{ route('contactanos') }}">Contactenos</a></li>
                    <li class="list-inline-item">|</li>
                    <li class="list-inline-item"><a class="nav-link-style nav-link-light" href="{{ route('terminos-condiciones') }}">Terminos y condiciones</a></li>
                  </ul>
                </div>
                <div class="d-flex pt-2 pt-sm-0 ml-auto">
                  <a class="social-btn sb-facebook sb-light mr-2 mb-2" href="https://www.facebook.com/envasadorasangabriel"><i class="fab fa-facebook-f"></i></a>
                  <a class="social-btn sb-instagram sb-light mr-2 mb-2" href="#"><i class="fab fa-instagram"></i></a>
                  <a class="social-btn sb-youtube sb-light mb-2" href="#"><i class="fab fa-youtube"></i></a></div>
              </div>
              <div class="d-sm-flex justify-content-between align-items-center pb-4 pb-sm-2">
                
                <div class="order-sm-1 mb-3">
                  <p class="font-size-ms mb-0">
                    <span class="text-light opacity-50 mr-1">© Derechos reservados. Desarrollado por </span><a class="nav-link-style nav-link-light" href="https://dev.esg.com.pe/" target="_blank" rel="noopener">SysAdmin</a></p>
                </div>
              </div>
            </div>
          </div>
        </footer>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon fe-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('vendor/jquery/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-file-input/js/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('vendor/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ asset('vendor/lightgallery/js/lightgallery.min.js') }}"></script>
    <script src="{{ asset('vendor/lg-video/lg-video.min.js') }}"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
    <script src="{{ asset('vendor/bootstrap/js/theme.min.js') }}"></script>
    @yield('footer')
  </body>
</html>