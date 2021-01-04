



   <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
<header class="cs-header navbar navbar-expand-lg navbar-light bg-light navbar-sticky" data-scroll-header>
    <div class="container px-0 px-xl-3">
        <!--
        <a class="navbar-brand" href="#">
            <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Bootstrap
          </a>
        -->
        <!--
        <button class="navbar-toggler ml-n2 mr-2" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu"><span class="navbar-toggler-icon"></span></button>
        
            <a class="navbar-brand order-lg-1 mx-auto ml-lg-0 pr-lg-2 mr-lg-4" href="{{ url('') }}">
                <img class="d-none d-lg-block" width="153" src="{{ asset('images/logo/logo-dark2.png') }}" alt="Around"/>
                <img class="d-lg-none" width="58" src="img/logo/logo-icon.png" alt="Around"/>
                Aqui va
            </a>
        -->
        <a class="navbar-brand" style="color: #5a5b75;" href="{{ url('') }}">
            <img src="{{ asset('images/logo/logo-brand.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
            &nbsp;Envasadora San Gabriel

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="d-flex align-items-center order-lg-3 ml-lg-auto" id="primaryMenu">
            
            <div class="cs-offcanvas-cap navbar-box-shadow">
                <h5 class="mt-1 mb-0">Menu</h5>
                <button class="close lead" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="cs-offcanvas-body">
            <!-- Menu-->
            <ul class="navbar-nav">
               
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
                </li>
                <li class="nav-item {{ request()->is('nosotros*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
                </li>
                <li class="nav-item {{ request()->is('productos*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('productos') }}">Productos</a>
                </li>
                <li class="nav-item {{ request()->is('clientes*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('clientes') }}">Clientes</a>
                </li>
                <li class="nav-item {{ request()->is('contact*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contactanos') }}">Contactenos</a>
                </li>
                <li class="nav-item "><a class="nav-link" href="https://demo.createx.studio/around/demo-product-software.html" target="_blank">X</a></li>

             
                
      
            </ul>
            </div>
        </div>
    </div>
  </header>
  <!-- Page content-->