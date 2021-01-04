@extends('layouts.page')
@section('container')
@include('layouts.sidebar')

<section>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                @foreach ($products as $product)
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="card-header">
                          <text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $product->productname }}</text>

                        </div>
                        <img src="{{ asset($product->filename) }}" width="200">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ficha Tecnica</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>




 



@endsection