<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function suma(){
        return view('formulario', ['operacion' => 'suma']);
    }

    public function resta(){
        return view('formulario', ['operacion' => 'resta']);
    }

    public function multiplicacion(){
        return view('formulario', ['operacion' => 'multiplicacion']);
    }

    public function hacerOperacion(Request $request){

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

    }

}
