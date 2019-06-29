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
// Muestra el formulario para buscar Clientes
Route::get('BuscarCliente','ClientesController@index');
// Buscar el cliente con lo parametros enviados
Route::post('BuscarCliente','ClientesController@show');
// Muestra el formulario de par nuevo Cliente
Route::get('NuevoCliente','ClientesController@create');
// Envia los datos a guardar
Route::post('GuardarCliente','ClientesController@store');
// Recupera los datos del Cliente en un formulario para ser modificados
Route::get('RecuperarCliente/{id}','ClientesController@edit')->where('id','[0-9]+');
// Envia los datos modificados a guardas
Route::post('ModificarCLiente','ClientesController@update');
// Pregunta de confirmacion de elminar Cliente
Route::get('ConfirmaCliente/{id}','ClientesController@confirma')->where('id','[0-9]+');
// Eliminar Cliente
Route::post('EliminaCliente','ClientesController@destroy');


/** RUTAS PARA EL MODELO SERVICIO */
// Muestra el formulario para buscar Servicios
Route::get('BuscarServicio','ServiciosController@index');
// Buscar el servicio con los parametros enviados
Route::post('BuscarServicio','ServiciosController@show');
// Muestra el formulario para Nuevo Servicio
Route::get('NuevoServicio','ServiciosController@create');
// Envio los a guardar
Route::post('GuardarServicio','ServiciosController@store');
// Recupera los datos del Servicio en un formulario para se modificados
Route::get('RecuperarServicio/{id}','ServiciosController@edit')->where('id','[0-9]+');
// Envia los datos modificado a guardar
Route::post('ModificarServicio','ServiciosController@update');
// Pregunta de confirmacion de eliminar Servicio
Route::get('ConfirmaServicio/{id}','ServiciosController@confirma')->where('id','[0-9]+');
// Eliminar Servicio
Route::post('EliminaServicio','ServiciosController@destroy');

/** RIUTAS PARA EL MODELO MASCOTAS */
// Muestra el formulario para buscar Mascotas
Route::get('BuscarMascota','MascotaController@index');
// Buscar La mascota segun a los parametros enviados
Route::post('BuscarMascota','MascotaController@show');
// Formulario de Nueva Mascota
Route::get('NuevoMascota','MascotaController@create');
// Envia los datos a guardar
Route::post('GuardarMascota','MascotaController@store');
// Recupera los datos de Mascota y muestra en formulario
Route::get('RecuperaMascota/{id}','MasctoaController@edit')->where('id','[0-9]+');
// Envia los datos a modificar
Route::post('ModificarMascota','MascotaController@update');
// Pregunta de confirmacion de eliminar Mascota
Route::get('ConfirmaMascota/{id}','MascotaContorller@confirma')->where('id','[0-9]+');
// Eliminar Mascota
Route::post('EliminaMascota','MascotaController@destroy');
// Buscar al Cliente
Route::post('showMascota','ClientesController@showMascota');



/*Route::get('servicios','ServiciosController@index');

Route::get('clientes','ClientesController@index');

Route::get('mascotas','MascotasController@index');

Route::get('facturacion','FacturacionController@index');*/