<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function terminos_condiciones(){
        return view('terminos_condiciones');
    }
    public function nosotros(){
        return view('nosotros');
    }
    public function clientes(){
        return view('clientes');
    }
    public function contactanos(){
        return view('contactanos');
    }
    public function contactanos_post(Request $request){
        //Aqui debemos responder en json
    }
}
