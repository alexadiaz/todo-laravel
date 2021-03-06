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


Route::get('/todo', 'TodoController@formulario')->name('app.todo');
Route::post('/operaciones','TodoController@operaciones')->name('app.operaciones');


Route::get('/form', 'FormController@formulario')->name('app.form');
Route::get('/form_editar/{id}', 'FormController@formulario_editar')->name('app.form_editar');
Route::post('/agregar','FormController@agregar')-> name('app.agregar');
Route::post('/eliminar','FormController@eliminar')-> name('app.eliminar');
Route::post('/modificar','FormController@modificar')-> name ('app.modificar');


Route::get('/consultar_v1', 'FormControllerDb@consultar_v1');
Route::get('/consultar_v2', 'FormControllerDb@consultar_v2');
Route::get('/insertar_v1', 'FormControllerDb@insertar_v1');
Route::get('/consultar_v3', 'FormControllerDb@consultar_v3');
Route::get('/insertar_v3', 'FormControllerDb@insertar_v3');