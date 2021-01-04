@extends('layouts.home')

@section('style')
    <link href="{{ asset('bootstrap/css/carousel.css') }}" rel="stylesheet">
@endsection


@section('container')
<<<<<<< HEAD
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

                <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Combustibles</h1>
                    <p>Distribucion y comercializacion de combustibles en Diesel y Gasohol.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
                </div>
=======
    @include('layouts.sidebar')

{{-- 
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            
            <img class="bd-placeholder-img" src="{{ asset('images/carousel/s1.jpg') }}" alt="" width="100%" height="100%" focusable="false" role="img">
            <div class="container">
            <div class="carousel-caption text-left">
                <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="bd-placeholder-img" src="{{ asset('images/carousel/s2.jpg') }}" alt="" width="100%" height="100%" focusable="false" role="img">
             
            <div class="container">
            <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
>>>>>>> 1ed19e32c79468646f84102b49af72cd338bde89
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

                <div class="container">
                <div class="carousel-caption">
                    <h1>Pinturas</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Resinas, revestimiento de tanques y otros</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
<<<<<<< HEAD
    
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

        </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

        </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

        </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
@endsection

 
=======
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
--}}



<section class="position-relative bg-faded-primary pt-7 pb-5 pb-md-6 pb-lg-7 overflow-hidden">
    <div class="cs-shape cs-shape-bottom cs-shape-curve bg-body">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
        <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
      </svg>
    </div>
    <div class="container pt-4 pt-md-5 pt-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 text-center text-lg-left">
          <h1 class="mb-3">¡Nueva forma de trabajar con tu equipo!!</h1>
          <p class="font-size-lg text-muted mb-4">Collaboration on the project is fast and easy with our task management app.</p>
           
        </div>
        <div class="col-xl-7 col-lg-8 offset-xl-1 pt-lg-3">
          <div class="cs-carousel bg-size-cover mx-auto pt-6 pb-2" style="max-width: 705px; background-image: url({{ asset('images/shape.png') }});">
            <div class="position-relative">
              <div class="cs-frame-browser-label">
                <div class="cs-carousel-label"><i class="fe-calendar"></i><span>Team Scheduling</span></div>
              </div>
              <div class="cs-frame-browser-body">
                <div class="tns-outer" id="tns1-ow"><div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">4</span>  of 3</div><div class="tns-inner" id="tns1-iw"><div class="cs-carousel-inner tns-slider tns-gallery tns-subpixel tns-calc tns-horizontal" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;controls&quot;: false, &quot;nav&quot;: false, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 6000}" id="tns1">
                  <div data-carousel-label="<i class=&quot;fe-calendar&quot;></i><span>Team Scheduling</span>" class="tns-item tns-normal" id="tns1-item0" style="" aria-hidden="true" tabindex="-1"><img class="rounded" src="{{ asset('images/carousel/car01.jpg') }}" alt="Screenshot">
                  </div>
                  <div data-carousel-label="<i class=&quot;fe-user&quot;></i><span>Account Management</span>" class="tns-item tns-normal" id="tns1-item1" aria-hidden="true" tabindex="-1" style=""><img class="rounded" src="{{ asset('images/carousel/car02.jpg') }}" alt="Screenshot">
                  </div>
                  <div data-carousel-label="<i class=&quot;fe-mail&quot;></i><span>Built-in Messages</span>" class="tns-item tns-normal" id="tns1-item2" aria-hidden="true" tabindex="-1" style=""><img class="rounded" src="{{ asset('images/carousel/car01.jpg') }}" alt="Screenshot">
                  </div>
                <div data-carousel-label="<i class=&quot;fe-calendar&quot;></i><span>Team Scheduling</span>" class="tns-item tns-slide-cloned tns-slide-active tns-fadeIn" style="left: 0%;"><img class="rounded" src="{{ asset('images/carousel/car02.jpg') }}" alt="Screenshot">
                  </div></div></div></div>
              </div>
            </div>
            <div class="cs-carousel-pager pt-4 text-nowrap text-center mt-4">
              <button class="active" data-nav="" data-goto="1"></button>
              <button data-nav="" data-goto="2" class=""></button>
              <button data-nav="" data-goto="3" class=""></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<section class="bg-secondary py-5 py-md-6 mt-n4">
    <div class="container py-2">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10 text-center">
          <h2>Industries</h2>
          <p class="text-muted mb-5 pb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;"><img class="card-img-top" src="img/demo/business-consulting/industries/01.jpg" alt="Life Science">
            <div class="card-body">
              <h3 class="h5 mb-0">Life Science</h3>
            </div></a></div>
        <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;"><img class="card-img-top" src="img/demo/business-consulting/industries/02.jpg" alt="Technology">
            <div class="card-body">
              <h3 class="h5 mb-0">Technology</h3>
            </div></a></div>
        <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;"><img class="card-img-top" src="img/demo/business-consulting/industries/03.jpg" alt="Healthcare">
            <div class="card-body">
              <h3 class="h5 mb-0">Healthcare</h3>
            </div></a></div>
        <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;"><img class="card-img-top" src="img/demo/business-consulting/industries/04.jpg" alt="Natural Resources">
            <div class="card-body">
              <h3 class="h5 mb-0">Natural Resources</h3>
            </div></a></div>
        <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;"><img class="card-img-top" src="img/demo/business-consulting/industries/05.jpg" alt="Freight &amp; Logistics">
            <div class="card-body">
              <h3 class="h5 mb-0">Freight &amp; Logistics</h3>
            </div></a></div>
        <div class="col-lg-4 col-sm-6 mb-grid-gutter"><a class="card card-hover border-0 box-shadow mx-auto" href="#" style="max-width: 400px;"><img class="card-img-top" src="img/demo/business-consulting/industries/06.jpg" alt="Retail">
            <div class="card-body">
              <h3 class="h5 mb-0">Retail</h3>
            </div></a></div>
      </div>
      <div class="pt-3 text-center"><a class="btn btn-primary" href="#">See all industries</a></div>
    </div>
  </section>

@endsection
>>>>>>> 1ed19e32c79468646f84102b49af72cd338bde89
