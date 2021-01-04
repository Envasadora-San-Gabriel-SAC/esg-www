<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <div class="container">
        <a class="navbar-brand" href="{{ url('') }}">
            <img src="{{ asset('images/logo_esg_small2.png') }}" width="30" height="30" alt="">
            ESG
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="{{ url('') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home-nosotros') }}">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home-contactenos') }}">Contactenos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-md-0">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-sign-in-alt"></i>
                        Intrantet
                    </a>
                </li>
            </ul>
             
        </div>
        </div>
    </nav>
</header>