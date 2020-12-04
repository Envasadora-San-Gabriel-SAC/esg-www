<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
            <meta name="generator" content="Jekyll v4.1.1">
            <!-- Bootstrap core CSS -->
            <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> 
            @yield('header')
            @yield('style')
            <style>
                .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                }
        
                @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
                }
            </style>
            <!-- Custom styles for this template -->
            <link href="carousel.css" rel="stylesheet">
        </head>
    <body>
        
        @include('layouts.sidebar')
        <main role="main">
            @yield('container')
                <!-- FOOTER -->
            <footer class="container">
                <p class="float-right"><a href="#">Back to top</a></p>
                <p>&copy; {{ date("Y") }} ESG SRL,  &middot; <a href="{{ route('terminos-condiciones') }}">Terminos y Condiciones</a></p>
            </footer>
        </main>
        <script src="{{ asset('jquery/jquery-3.5.1.min.js') }}"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
