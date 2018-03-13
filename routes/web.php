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


Route::get('/', 'MenuController@show')->name('app.menu');

Route::get('/suma', 'OperacionesController@suma')->name('app.suma');
Route::get('/resta', 'OperacionesController@resta')->name('app.resta');
Route::get('/multiplicacion', 'OperacionesController@multiplicacion')->name('app.multiplicacion');

Route::get('/acumulado', 'ResultadoController@acumulado')->name('app.acumulado');
Route::get('/resultado/{res}', 'ResultadoController@resultado')->name('app.resultado');

Route::post('/haceroperacion', 'OperacionesController@hacerOperacion')->name('app.haceroperacion');