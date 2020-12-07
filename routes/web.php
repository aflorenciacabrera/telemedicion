<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Auth::routes();

Route::post("/medidor/login","PersonasController@login")->name('medidor.login');

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
// Rutas de Vistas
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/consumos', 'MedidoresController@consumo')->name('misconsumos');
Route::get('/facturas', 'FacturasController@facturacion')->name('misfacturas');
Route::get('/perfil', 'PersonasController@perfil')->name('perfil');
Route::get('/ubicacion/medidor', 'MedidoresController@ubicacion')->name('ubicacionmedidor');

});
