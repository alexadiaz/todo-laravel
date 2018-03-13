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

use Illuminate\Http\Request;

// Route::get("/suma/{n1}/{n2}", function($n1, $n2){
//     return view("mauro", ['res' => $n1 + $n2]);
// })->name("pag.mauro");

// Route::get("/calc", function($edad){
//     return view("calc");
// });

Route::get('/', function () {
    return view('menu');
})-> name('app.menu');


Route::get('/acumulado', function(){
    $acc = session('acc');
    $sub = session('sub');

    return view('acumulado', [
        'acumulado' => $acc,
        'substraido' => $sub    
    ]);
})->name('app.acumulado');



Route::get('/suma', function(){
    return view('formulario', ['operacion' => 'suma']);
})->name('app.suma');

Route::get('/resta', function(){
    return view('formulario', ['operacion' => 'resta']);
})->name('app.resta');

Route::get('/multiplicacion', function(){
    return view('formulario', ['operacion' => 'multiplicacion']);
})->name('app.multiplicacion');


Route::get('/resultado/{res}', function($res){
    $acc = session('acc');
    $sub = session('sub');
    return view('resultado', [
        'res' => $res, 
        'acumulado' => $acc,
        'substraido' => $sub    
    ]);
})->name('app.resultado');



Route::post('/haceroperacion', function(Request $request){

    $n1 = $request->input('n1');
    $n2 = $request->input('n2');

    $operacion = $request->input("operacion");

    if($operacion =="suma"){
        $res = $n1 + $n2;
    }
    else if($operacion == "resta"){
        $res = $n1 - $n2;
    }
    else if($operacion == "multiplicacion"){
        $res = $n1 * $n2;
    }

    $acc = session('acc');
    $sub = session('sub');

    session([
        'acc' => $acc + $res, 
        'sub' => $sub - $res
    ]);

    return redirect()->route('app.resultado', ['res' => $res]);
})->name('app.haceroperacion');
