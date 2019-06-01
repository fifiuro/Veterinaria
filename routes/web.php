<?php

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

Route::get('servicios','ServiciosController@index');

Route::get('clientes','ClientesController@index');

Route::get('mascotas','MascotasController@index');

Route::get('facturacion','FacturacionController@index');