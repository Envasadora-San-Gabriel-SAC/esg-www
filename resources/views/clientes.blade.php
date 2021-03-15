@extends('layouts.page')





@section('container')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>Clientes</li>
        </ol>
        <h2>Clientes</h2>

      </div>
    </section><!-- End Breadcrumbs -->
   <!-- ======= Clients Section ======= -->
   <section id="clients" class="clients">
    <div class="container">

        <div class="section-title">
        <h2>Clientes</h2>
        <p>Cumplimos con altos estándares de calidad lo que nos ha permitido ganar la confianza y reconocimiento de nuestros clientes.</p>
        </div>

        <div class="clients-slider swiper-container">
        <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('images/clientes') }}/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('images/clientes') }}/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('images/clientes') }}/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('images/clientes') }}/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('images/clientes') }}/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('images/clientes') }}/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('images/clientes') }}/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('images/clientes') }}/client-8.png" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
        </div>

    </div>
    </section><!-- End Clients Section -->    
</main><!-- End #main -->
@endsection