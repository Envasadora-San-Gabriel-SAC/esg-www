@extends('layouts.page')

@section('style')
<style>
    .producto{
        border:1px solid #dcdcdc;
        border-radius: 5px;
        margin:5px;
        padding:5px;
        background-color: #fff;
    }
</style>
    
@endsection

@section('container')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs" style="margin-bottom: 0px;border-bottom:1px solid #dcdcdc;">
    <div class="container">

        <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>Productos</li>
        </ol>
        <h2>Productos</h2>

    </div>
</section><!-- End Breadcrumbs -->

<section style="background-color:#f7f7f7;padding-top:25px;">
    <div class="container">
        <div class="row">
            @foreach ($products as $item)
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="producto" style="">
                        <table cellspacing="0" cellpadding="0" style="border-collapse: collapse;">
                            <tr>
                                <td class="text-center" style="padding:10px;">
                                    <img src="{{ $item->filename }}" alt="" width="230" height="230">
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top:5px;padding-bottom:5px;">
                                    <strong>{{ $item->productname }}</strong>
                                    <br><small>{{ $item->id }}</small>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table cellspacing="0" cellpadding="0" style="border-collapse: collapse;">
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control">
                                            </td>
                                            <td>
                                                GLN
                                            </td>
                                            <td>
                                                <button class="btn btn-primary">AGREGAR</button>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

 
@endsection