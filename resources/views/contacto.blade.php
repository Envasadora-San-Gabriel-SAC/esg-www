@extends('layouts.page')

@section('header')

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_AVDoYSiEeQLRCdMp0cdyHN9D7sqW90o&callback=initMap"
  type="text/javascript"></script>
@endsection

@section('container')
<main id="main" class="">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style="margin-bottom: 0px;">
        <div class="container">

            <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Contactanos</li>
            </ol>
            <h2>Contactanos</h2>
        </div>
        <div class="container-fluid" id="mapCanvas">
        </div>
    </section><!-- End Breadcrumbs -->
    <section>
        <div class="col-lg-12 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sCalle+Pampilla+121!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>

           
          </div>
    </section>

    <section id="contact">
        <div class="container">

        
            <div class="row">
                <div class="col-8">
                    <form action="" method="POST" role="form">
                        <div class="form-group row mt-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nombres</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Nombres y apellidos">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">E-Mail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Correo electronico">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Telefono/Movil</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Telefono / Movil">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Mensaje</label>
                            <div class="col-sm-10">
                                <textarea rows="10" cols="50" class="form-control"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-4">
                    <strong>CORREO</strong>
                    <br>ganasco@esg.com.pe
                    <br>ventas2@esg.com.pe
                    <hr>
                    <strong>Telefonos</strong>
                    <br>(+51) 1 713 1630
                    <br>953 928 070

                    <hr><strong>HORARIO</strong>
                    <table width="100%">
                        <tr>
                            <td>
                                Lunes - Viernes
                                <br>8:15 a.m. a 6:00 p.m.
                            </td>
                            <td>
                                Sabado
                                <br>8:15 a.m. a 12:30 p.m.

                            </td>
                        </tr>
                    </table>
                    

                    
                </div>
            </div>
        </div>
    </section>



</main>
@endsection


@section('script')

<script>
    function initMap() {
        //var myLatLngC = {lat: -12.086019, lng: -77.025015};
        var myLatLng = {lat: -11.868842, lng: -77.126666};

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
            title: 'Hello World!'
        });
    }

    google.maps.event.addDomListener(window, 'load', initMap);
</script>    
@endsection