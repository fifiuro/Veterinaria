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

/** RUTAS PARA EL MODELO CLIENTE */
// Muestra el formulario de par nuevo Cliente
Route::get('NuevoCliente','ClientesController@create');
// Envia los datos a guardar
Route::post('GuardarCliente','ClientesController@store');
// Recupera los datos del Cliente en un formulario para ser modificados
Route::get('RecuperarCliente/{id}','ClientesController@edit')->where('id','[0-9]+');
// Envia los datos modificados a guardas
Route::post('ModificarCLiente','ClientesController@update');

/** RUTAS PARA EL MODELO SERVICIO */
// Muestra el formulario para Nuevo Servicio
Route::get('NuevoServicio','ServiciosController@create');
// Envio los a guardar
Route::post('GuardarServicio','ServiciosController@store');
// Recupera los datos del Servicio en un formulario para se modificados
Route::get('RecuperarServicio/{id}','ServiciosController@edit')->where('id','[0-9]+');
// Envia los datos modificado a guardar
Route::post('ModificarServicio','ServiciosController@update');




Route::get('servicios','ServiciosController@index');

Route::get('clientes','ClientesController@index');

Route::get('mascotas','MascotasController@index');

Route::get('facturacion','FacturacionController@index');