
<!-- ======= Main Header ======= -->
<style>
    .main-header {
        padding: 15px 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #3AA69B;
    }

    .logo {
        display: flex;
        align-items: center;
    }

    .logo img {
        max-height: 45px;
    }

    .logo a {
        display: flex;
        align-items: center;
        font-weight: 550;
        font-size: 1.3rem;
        color: #ffffff;
        text-decoration: none;
        letter-spacing: 0.5px;
    }

    .logo a span {
        margin-left: 15px;
    }

    /* Navbar */
    #navbar ul {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
        gap: 25px;
    }

    #navbar ul li a {
        text-decoration: none;
        font-weight: 500;
        font-size: 1rem;
        color: #ffffff;
        padding: 6px 10px;
        border-radius: 6px;
        transition: all 0.3s ease;
    }

    #navbar ul li a:hover,
    #navbar ul li a.active {
        background: #80b1a5;
        color: #000000;
    }
</style>

<div class="main-header">
    <!-- Logo -->
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo/logo-brand.png') }}" alt="Logo">
            <span>Envasadora San Gabriel SAC</span>
        </a>
    </div>

    <!-- Menú -->
    <nav id="navbar" class="navbar">
        <ul>
            <li><a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}">HOME</a></li>
            <li><a href="{{ route('nosotros') }}" class="{{ request()->is('nosotros') ? 'active' : '' }}">NOSOTROS</a></li>
            <li><a href="{{ route('servicios') }}" class="{{ request()->is('servicios') ? 'active' : '' }}">SERVICIOS</a></li>
            <li><a href="https://pedidos.esg.com.pe" class="{{ request()->is('clientes') ? 'active' : '' }}">CLIENTES</a></li>
            <li><a href="{{ route('contacto') }}" class="{{ request()->is('contacto') ? 'active' : '' }}">CONTACTO</a></li>
        </ul>
    </nav>
</div>
</header>
