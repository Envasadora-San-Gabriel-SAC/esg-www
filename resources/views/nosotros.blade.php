@extends('layouts.page')

@section('container')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Nosotros</li>
            </ol>
            <h2 class="fw-bold">Nosotros</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= QUIÉNES SOMOS ======= -->
    <section id="about" class="about py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('images/about-mesa-directorio.jpg') }}"
                         class="img-fluid rounded shadow mx-auto d-block"
                         alt="Mesa directiva ESG">
                </div>
                <div class="col-lg-6 content">
                    <h2 class="mb-4">¿Quiénes somos?</h2>
                    <p class="lead">
                        ESG - Envasadora San Gabriel, es una empresa con negocios diversificados y clasificada entre las
                        empresas top en la Cámara de Comercio de Lima. Iniciamos nuestras operaciones en 1996...
                    </p>
                    <ul class="list-unstyled lead">
                        <li><i class="bi bi-check-circle text-primary"></i> Distribución y comercialización de hidrocarburos.</li>
                        <li><i class="bi bi-check-circle text-primary"></i> Fabricación de pinturas y servicios de pintado.</li>
                        <li><i class="bi bi-check-circle text-primary"></i> Resinas, piezas de fibra de vidrio y revestimiento de tanques.</li>
                        <li><i class="bi bi-check-circle text-primary"></i> Comercialización de solventes y productos químicos.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= VISIÓN ======= -->
    <section class="about py-5 bg-light">
        <div class="container">
            <div class="row align-items-center flex-lg-row-reverse">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('images/about-vision.png') }}"
                         class="img-fluid rounded shadow mx-auto d-block"
                         alt="Visión ESG">
                </div>
                <div class="col-lg-6 content">
                    <h2 class="mb-4">Nuestra Visión</h2>
                    <p class="lead">
                        Ser líderes en el mercado nacional brindando productos y servicios de calidad, respaldados
                        por la innovación tecnológica y satisfacción de nuestros clientes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= MISIÓN ======= -->
    <section class="about py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('images/about-mision.png') }}"
                         class="img-fluid rounded shadow mx-auto d-block"
                         alt="Misión ESG">
                </div>
                <div class="col-lg-6 content">
                    <h2 class="mb-4">Nuestra Misión</h2>
                    <p class="lead">
                        Construir una relación duradera con nuestros clientes, satisfaciendo sus necesidades con productos
                        y servicios de alta calidad, utilizando materia prima selecta y tecnología avanzada.
                    </p>
                    <p class="lead">
                        Estamos comprometidos con la mejora continua, la protección del medio ambiente y el desarrollo sostenible.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= COMPROMISO ======= -->
    <section id="testimonials" class="testimonials py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4">Nuestro Compromiso</h2>
            <p class="lead">
                Somos una empresa comprometida con el cuidado del medio ambiente que integra en sus procesos altos estándares de calidad.
            </p>
        </div>
    </section>

    <!-- ======= POLÍTICA INTEGRADA ======= -->
    <section class="about py-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <img src="{{ asset('images/PO-001-SG_Politica_Integrada_v03.jpg') }}"
                         class="img-fluid rounded shadow-lg mx-auto d-block policy-img"
                         alt="Política Integrada ESG">
                </div>
            </div>
        </div>
    </section>

</main>

<!-- ======= Estilos ======= -->
<style>
    .about img {
        max-width: 75%;
        height: auto;
        transition: transform 0.1s ease;
    }

    /* Zoom suave al pasar el mouse */
    .about img:hover {
        transform: scale(1.01);
    }

    /* Imagen de política */
    .policy-img {
        max-width: 50%;
    }

    h2 {
        font-size: 2em;
        font-weight: 500;
    }

    p.lead {
        font-size: 1.1em;
        line-height: 1.6;
    }
</style>

        {{--
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title content">
                            <h3 style="font-size: 2.4em;">POLITICA INTEGRADA DE
                                ENVASADORA SAN GABRIEL S.A.C.</h3>
                            <p style="font-size: 1.3em;">
                                En ENVASADORA SAN GABRIEL S.A.C. empresa dedicada a la comercialización
                                de combustibles y solventes, mediante camiones cisterna; así como a la
                                fabricación y comercialización de productos químicos resinas sintéticas de uso
                                industrial, aditivos para pinturas, pinturas y otros. Nos comprometemos a:

                            </p>
                        </div>
                    </div>
                    <div class="col-md-8 offset-md-2">
                        <p class="pt-4">
                        <ol class="lead">
                            <li>Brindar estándares de calidad que permitan satisfacer las necesidades y
                                expectativas de nuestros clientes y otras partes interesadas, mediante el
                                desarrollo de nuestros productos y servicios.
                            </li>
                            <li>Promover una cultura de prevención de lesiones y deterioro de la salud,
                                así como mantener un ambiente con condiciones de trabajo seguras y
                                saludables a través de la búsqueda de eliminación de peligros y reducción de
                                riesgos aplicando la jerarquía de controles.
                            </li>
                            <li>Proteger el medio ambiente, considerando acciones para la prevención de
                                la contaminación producto de nuestras actividades.
                            </li>
                            <li>Cumplir con los requisitos legales vigentes y aplicables a nuestras
                                actividades y otros que la organización suscriba voluntariamente.
                            </li>
                            <li>Integrar el Sistema de Gestión de la Seguridad y Salud en el Trabajo,
                                con los otros sistemas de gestión de la organización,
                            </li>
                            <li>Promover y garantizar que nuestros trabajadores y sus representantes
                                sean consultados y participen en el desarrollo del sistema integrado de
                                gestión.
                            </li>
                            <li>Mejorar continuamente nuestro sistema integrado de gestión con la
                                finalidad de proporcionar productos y servicios de calidad, seguros y
                                amigables con el medio ambiente; actuando con responsabilidad social y
                                desarrollando un entorno sostenible.
                            </li>
                        </ol>
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- End Testimonials Section -->
        --}}

    </main><!-- End #main -->
@endsection
