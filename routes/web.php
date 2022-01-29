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
Route::get('/venta/create','VentaController@create');
Route::post('/venta/create','VentaController@store');

Route::get('/recepcion', 'RecepcionController@index')->middleware('auth');
