<?php

namespace App\Http\Controllers;

use App\Models\WhProduct;
use Illuminate\Http\Request;

class ProductController extends Controller{
    public function index(){
        $result = WhProduct::all();
        return view('product.indice',[
            'products' => $result
        ]);
    }
}
