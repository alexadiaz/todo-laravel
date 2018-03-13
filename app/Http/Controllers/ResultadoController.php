<?php

namespace App\Http\Controllers;

class ResultadoController extends Controller
{
    public function resultado($res){
        
        $acc = session('acc');
        $sub = session('sub');

        return view('resultado', [
            'res' => $res, 
            'acumulado' => $acc,
            'substraido' => $sub    
        ]);

    }

    public function acumulado(){

        $acc = session('acc');
        $sub = session('sub');
    
        return view('acumulado', [
            'acumulado' => $acc,
            'substraido' => $sub    
        ]);
    }

}
