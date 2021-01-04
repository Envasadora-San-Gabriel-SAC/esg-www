<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.79.0">
        <title>Carousel Template · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- FontAwesome -->
        <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
    </style>

    
    <!-- Custom styles for this template -->
    
    @yield('header')
    @yield('style')
    </head>
    <body>
        @include('layouts.navbar')
        <main>
            @yield('container')
       
            
        </main>
        <main class="py-5" style="border-top:1px solid #e1e1e1;">
            @include('layouts.footer')
        </main>

        <footer class="text-muted ">
            <div class="container">
                <div class="row" style="font-size:1.4em;">
                    <div class="col-7">
                        &copy; {{ date("Y") }} - 
                        <img src="http://web.localhost/images/logo_esg_small2.png" width="30" height="30" alt="">
                        Envasadora San Gabriel SRL
                    </div>
                    <div class="col-5">
                        <p class="text-right float-end">Central Telefonica: <strong style="font-weight:700">(+51) 1 713 1630</strong></p>
                    </div>
                </div>
            </div>
          </footer>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>      
    </body>
</html>
