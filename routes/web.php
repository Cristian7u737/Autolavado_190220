<?php

use Illuminate\Support\Facades\Route;
use App\Models\clientes;
use App\Models\trabajadores;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cliente', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/clientes', [App\Http\Controllers\Cliente::class, 'index',])->name('listarcliente');

Route::get('/vclientes', function(){
    $cliente=clientes::all();
    foreach($cliente as $clientes){
        echo "Nombre: ".$clientes->nombre."Apellidos: "
        .$clientes->apaterno."Dirección: "
        .$clientes->direccion."<br>";
    }
});

Route::get('/vtrabajadores', function(){
    $trabajador=trabajadores::all();
    foreach($trabajador as $trabajador){
        echo "Nombre: ".$trabajador->nombre."Apellidos: "
        .$trabajador->apaterno."Dirección: "
        .$trabajador->direccion."<br>";
    }
});
