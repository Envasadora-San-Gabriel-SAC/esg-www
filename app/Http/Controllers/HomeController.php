<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function terminos_condiciones(){
        return view('terminos_condiciones');
    }
}
