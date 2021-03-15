@extends('layouts.page')

@section('container')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
            <li><a href="index.html">Home</a></li>
            <li>Nosotros</li>
            </ol>
            <h2>Nosotros</h2>

        </div>
    </section><!-- End Breadcrumbs -->

        
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('images/about-mesa-directorio.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3 style="font-size: 2.4em;">Quienes somos</h3>
                    <p class="font-italic" style="font-size: 1.3em;">
                        ESG - Envasadora San Gabriel, es una empresa con negocios diversificados y clasificada entre las empresas top 
                        en la cámara de comercio de Lima. Iniciamos nuestras operaciones en el año 1996. Durante este tiempo nos 
                        hemos expandido abarcando negocios como:
                    </p>
                    <ul  style="font-size: 1.1em;">
                        <li><i class="bi bi-check-circle"></i> Distribución y comercialización de hidrocarburos.</li>
                        <li><i class="bi bi-check-circle"></i> Fabricación de pinturas en general y servicio de pintado.</li>
                        <li><i class="bi bi-check-circle"></i> Fabricación de resinas, piezas de fibra de vidrio y revestimiento de tanques.</li>
                        <li><i class="bi bi-check-circle"></i> Comercialización de solventes y productos químicos.</li>
                    </ul>
                    
                </div>
            </div>

        </div>
    </section><!-- End About Section -->
    
    <!-- ======= About NUESTRA VISION ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3 style="font-size: 2.4em;">Nuestra Visión</h3>
                    <p class="font-italic" style="font-size: 1.3em;">
                        Ser líderes en el mercado nacional brindando productos y servicios de gran calidad, respaldados en la 
                        continua innovación tecnológica, satisfaciendo las necesidades de nuestros clientes por encima de sus expectativas.
                    </p>
                    
                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('images/about-vision.png') }}" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= About NUESTRA MISION ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('images/about-mision.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3 style="font-size: 2.4em;">Nuestra Misión</h3>
                    <p class="font-italic" style="font-size: 1.3em;">
                        Construir una relación duradera con nuestros clientes, satisfaciendo sus necesidades con productos y servicios de 
                        alta calidad, utilizando materia prima selecta, tecnología avanzada, colaboradores motivados y de alto desempeño. 
                    </p>
                    <p class="font-italic" style="font-size: 1.3em;">                        
                        Estamos comprometidos con el mejoramiento continuo de los procesos, el cuidado y protección del medio ambiente, 
                        con el fin de lograr la diferenciación y el desarrollo socioeconómico sostenible de nuestra organización. 
                    </p>
                     
                </div>
            </div>

        </div>
    </section><!-- End About Section -->


 

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="section-title">
            <h3  style="font-size: 2.4em;">Nuestro Compromiso</h3>
            <p style="font-size: 1.3em;">
                Somos una empresa comprometida con el cuidado del medio ambiente que integra en sus procesos de 
                producción, distribución y comercialización altos estándares de calidad.
            </p>
            </div>

           

        </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

@endsection