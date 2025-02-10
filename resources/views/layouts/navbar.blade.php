    <!-- ======= Header ======= -->
<style>    
    .boton a{
        border:1px solid rgba(0, 0, 255, 0.385);
        border-radius: 5px;
        margin-left:10px;
        padding:5px; 
        background-color: rgb(57, 136, 255);
        color:#fff;
    }
    .boton a:hover{
        border:1px solid rgba(0, 132, 255, 0.57);
        border-radius: 5px;
        margin-left:10px;
        padding:5px; 
        background-color: #fff;
    }
   
</style>    
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1><a href="{{ route('home') }}"><img src="{{ asset('images/logo/logo-brand.png') }}" alt=""> Envasadora San Gabriel SAC</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ (request()->is('/')) ? 'active' : '' }}">HOME</a></li>
                <li><a href="{{ route('nosotros') }}" class="{{ (request()->is('nosotros')) ? 'active' : '' }}">NOSOTROS</a></li>
                <li><a href="{{ route('servicios') }}" class="{{ (request()->is('servicios')) ? 'active' : '' }}">SERVICIOS</a></li>
                <!--
                <li><a href="{{ route('productos.index') }}">PRODUCTOS</a></li>
                <li><a href="{{ route('clientes') }}" class="{{ (request()->is('clientes')) ? 'active' : '' }}">CLIENTES</a></li>
            -->
                <li><a href="https://pedidos.esg.com.pe" class="{{ (request()->is('clientes')) ? 'active' : '' }}">CLIENTES</a></li>
                <li><a href="{{ route('contacto') }}" class="{{ (request()->is('contacto')) ? 'active' : '' }}">CONTACTO</a></li>
                <!--
                <li class="boton"><a href="{{ route('clientes') }}" class=" {{ (request()->is('cotizar')) ? 'active' : '' }}"><strong>&nbsp;COTIZAR&nbsp;</strong></a></li>
                -->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->