<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class TodoController extends Controller
{
    public function formulario(){
        return view('todo.formulario',['array' => []]);
    }

    public function operaciones(Request $_request){
        $a = ($_request->input('action'));
        dump($a);

        switch ($_request->input('action')){
            case 'agregar':
                //$_request->session()->flush();
                $tarea = $_request->input("tarea");
                if($tarea != "") Session::push('lista_tareas', $tarea);   
                $array = session("lista_tareas");
                return view('todo.formulario',['array' => $array]);
            break;
            
          
            
            // case 'eliminar':
            //     $nombre = $_request->input("action");
            //     dump($_request);
            // break;           
        }
    }
}