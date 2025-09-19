@extends('layouts.page')

@section('header')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_AVDoYSiEeQLRCdMp0cdyHN9D7sqW90o&callback=initMap" type="text/javascript"></script>
@endsection

@section('container')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style="margin-bottom: 0px;">
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Contactanos</li>
            </ol>
            <h2>Contactanos</h2>
        </div>
        <div class="container-fluid" id="mapCanvas"></div>
    </section><!-- End Breadcrumbs -->

    <!-- Mapa -->
    <section>
    <div class="col-lg-12">
        <iframe
            class="mb-4 mb-lg-0"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d244.03216221504925!2d-77.12720976596586!3d-11.86921234912739!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d38adf9325cf%3A0xfe1507fe3c9fa6bc!2sEnvasadora%20San%20Gabriel%20SAC%20-%20ESG%20SAC!5e0!3m2!1ses-419!2spe!4v1758313183452!5m2!1ses-419!2spe"
            frameborder="0"
            style="border:0; width: 100%; height: 384px;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
     </div>
    </section>

    <!-- Contacto -->
    <section id="contact">
        <div class="container">
            <div class="row justify-content-center">

                <!-- Formulario de Contacto -->
                <div class="col-lg-7 col-md-8 col-sm-12">
                    <form action="" method="POST" role="form">
                        @csrf
                        <div class="form-group row mb-2">
                            <label for="name" class="col-sm-3 col-form-label">Nombres</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Nombres y apellidos" required>
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="email" class="col-sm-3 col-form-label">E-Mail</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="correo electrónico" required>
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="phone" class="col-sm-3 col-form-label">Teléfono / Móvil</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control form-control-sm" id="phone" name="phone" placeholder="(+51) 9XX XXX XXX" required>
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="message" class="col-sm-3 col-form-label">Mensaje</label>
                            <div class="col-sm-9">
                                <textarea id="message" name="message" class="form-control form-control-sm" rows="4" placeholder="Escribe tu mensaje aquí..." required></textarea>
                            </div>
                        </div>
                        <div class="text-end mt-2">
                            <button type="submit" class="btn btn-primary btn-sm">Enviar mensaje</button>
                        </div>
                    </form>
                </div>

                <!-- Información de Contacto -->
                <div class="col-lg-4 col-md-6 col-sm-12 mt-3 mt-md-0">
                    <div class="card p-3" style="border-radius: 10px; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                        <div class="mb-3">
                            <h6 class="fw-bold">Correo</h6>
                            <p class="mb-1"><a href="mailto:ganasco@esg.com.pe">ganasco@esg.com.pe</a></p>
                            <p class="mb-0"><a href="mailto:ventas2@esg.com.pe">ventas2@esg.com.pe</a></p>
                        </div>
                        <div class="mb-3">
                            <h6 class="fw-bold">Teléfonos</h6>
                            <p class="mb-1">(+51) 1 713 1630</p>
                            <p class="mb-0">953 928 070</p>
                        </div>
                        <div>
                            <h6 class="fw-bold">Horario de Atención</h6>
                            <table class="table table-borderless mb-0">
                                <tr>
                                    <td>Lunes - Viernes<br>8:15 a.m. - 6:00 p.m.</td>
                                    <td>Sábado<br>8:15 a.m. - 12:30 p.m.</td>
                                </tr>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </section>

</main>
@endsection

@section('script')
<script>
function initMap() {
    var myLatLng = {lat: -12.0463731, lng: -77.042754};
    var map = new google.maps.Map(document.getElementById('mapCanvas'), {
        center: myLatLng,
        scrollwheel: false,
        zoom: 17
    });
    var img = {
        url: '{{ asset('images/logo/icon-map.png') }}',
        size: new google.maps.Size(48, 62),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(0, 48)
    };
    var marker = new google.maps.Marker({
        map: map,
        icon: img,
        position: myLatLng,
        title: 'Ubicación'
    });
}

google.maps.event.addDomListener(window, 'load', initMap);
</script>
@endsection

