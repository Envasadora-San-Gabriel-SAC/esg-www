@extends('layouts.home')

@section('container')

@include('layouts.sidebar')

<!-- Intro-->
<section class="container my-lg-2 pt-5 pb-lg-7" style="margin-top:20px;">
    <div class="row align-items-center">
        <div class="col-lg-5 py-3 py-lg-0">
            <h1>Quienes Somos</h1>
            <h2 class="h3" style="font-weight: lighter;">Cómo ayudamos a otras empresas a crecer..</h2>
            <div class="py-4">
            <p class="cs-callout" style="font-size:1.3em;font-weight: lighter;">ESG - Envasadora San Gabriel, es una empresa con negocios diversificados y clasificada entre las empresas top en la cámara de comercio de Lima. 
                Iniciamos nuestras operaciones en el año 1996. Durante este tiempo nos hemos expandido abarcando negocios como:</p>
            </div>
            <!-- <a class="cs-video-btn cs-video-btn-primary cs-video-btn-sm mr-3" href="https://www.youtube.com/watch?v=hTu0a4o97dU"></a><span class="font-size-sm text-muted">Get to know us better</span> -->
        </div>
        <div class="col-xl-6 col-lg-7 offset-xl-1">
            <div class="py-5" style="min-height: 543px;">
            <div class="d-none d-lg-block position-absolute bg-no-repeat bg-position-center h-100" style="top: 0; left: -45px; width: 646px; background-image: url(images/bg-shape.svg);"></div>
            <div class="row no-gutters mx-n2 pt-lg-4">
                <div class="col-sm-4 px-2 mb-3">
                    <a class="card h-100 card-body py-5 justify-content-center border-0 box-shadow-lg text-center" href="#">
                        <i class="fas fa-truck-moving text-primary h1 mb-3"></i>
                        <h3 class="h5 mb-0" style="font-weight: 400;">Distribución y Ventas</h3>
                    </a>
                </div>
                <div class="col-sm-4 px-2 mb-3">
                    <a class="card card-body py-5 border-0 box-shadow-lg text-center mb-3" href="#">
                        <i class="fas fa-palette text-danger h1 mb-3"></i>
                        <h3 class="h5 mb-0">Pinturas</h3>
                    </a>
                    <a class="card card-body py-5 border-0 box-shadow-lg text-center" href="#">
                        <i class="fab fa-creative-commons-remix text-info h1 mb-3"></i>
                        <h3 class="h5 mb-0">Resinas</h3>
                    </a>
                </div>
                <div class="col-sm-4 px-2 mb-3">
                    <a class="card card-body py-5 border-0 box-shadow-lg text-center mb-3" href="#">
                        <i class="fas fa-cubes text-success h1 mb-3"></i>
                        <h3 class="h5 mb-0">Solventes.</h3>
                    </a>
                    <a class="card card-body py-5 border-0 box-shadow-lg text-center" href="#">
                        <i class="fas fa-vial text-warning h1 mb-3"></i>
                        <h3 class="h5 mb-0">Quimicos</h3>
                    </a>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>



<!-- Statistics-->
<!--
<section class="bg-secondary py-5 mt-n4 mb-6 mt-lg-0 mb-lg-7" style="padding:0px;">
    <div class="container py-3">
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center py-3">
            <h3 class="display-4">{{ date("Y")-1996 }}</h3>
            <p class="text-muted mb-0">Años de experiencia</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center py-3">
            <h3 class="display-4">50+</h3>
            <p class="text-muted mb-0">Empleados</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center py-3">
            <h3 class="display-4">90%</h3>
            <p class="text-muted mb-0">Feedback Positivos</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center py-3">
            <h3 class="display-4">100</h3>
            <p class="text-muted mb-0">Proyectos completados con éxito</p>
            </div>
        </div>
    </div>
</section>  
-->  
@endsection