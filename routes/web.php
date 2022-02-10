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
})->middleware('auth');

Auth::routes();

//VENTAS

Route::get('/venta','VentaController@index')->middleware('auth');
Route::get('/create','VentaController@create')->middleware('auth');

Route::get('/inventario','VentaController@inventario')->middleware('auth');


//CATEGORIA
Route::get('/categoria','CategoriaController@create')->middleware('auth');

//PRODUCTO
Route::get('/producto','ProductoController@create')->middleware('auth');

//RECEPCION
Route::get('/recepcion', 'RecepcionController@index')->middleware('auth');
Route::post('/recepcion', 'RecepcionController@store')->middleware('auth');

//SERVICIOS
Route::get('/servicios', 'HomeController@servicio')->middleware('auth');

//HISTORIAL
Route::get('/historial', 'HistorialController@index')->middleware('auth');
Route::get('/historial/{ci}/{nombre}', 'HistorialController@show')->middleware('auth');
Route::get('/historial/{ci}/{nombre}/{fecha}', 'HistorialController@informe')->middleware('auth');
Route::delete('/historial/{ci}/{nombre}', 'HistorialController@destroy')->middleware('auth');
Route::delete('/historial/{ci}/{nombre}/{fecha}', 'HistorialController@eliminarFecha')->middleware('auth');