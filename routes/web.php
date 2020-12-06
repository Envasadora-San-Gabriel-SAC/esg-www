<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/term',[HomeController::class,'terminos_condiciones'])->name('terminos-condiciones');
Route::get('/nosotros',[HomeController::class,'nosotros'])->name('nosotros');
Route::get('/clientes',[HomeController::class,'clientes'])->name('clientes');

Route::get('/contactanos',[HomeController::class,'contactanos'])->name('contactanos');
Route::post('/contactanos',[HomeController::class,'contactanos_post'])->name('contactanos-post');

// Productos
Route::get('/productos',[ProductController::class,'index'])->name('productos');

