<?php

use App\Http\Controllers\BodegaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DespachoController;
use App\Http\Controllers\EmpaqueController;
use App\Http\Controllers\PilotoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RecepcionController;
use App\Http\Controllers\TransporteController;
use App\Http\Controllers\TransportistaController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome'); 
}); 

Route::resource('clientes',ClienteController::class);
Route::resource('productos',ProductoController::class);
Route::resource('bodegas',BodegaController::class);
Route::resource('despachos',DespachoController::class);
Route::resource('empaques',EmpaqueController::class);
Route::resource('pilotos',PilotoController::class);
Route::resource('recepcions',RecepcionController::class);
Route::resource('transportes',TransporteController::class);
Route::resource('transportistas',TransportistaController::class);