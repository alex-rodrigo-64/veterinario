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

Route::get('/producto','VentaController@register')->middleware('auth');


Route::get('/recepcion', 'RecepcionController@index')->middleware('auth');

