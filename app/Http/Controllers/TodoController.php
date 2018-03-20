<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class TodoController extends Controller
{
    public function formulario(){
        Session::has('lista_tareas') ? $array = (session("lista_tareas")) : $array = [];
        return view('todo.formulario',['array' => $array]);
    }

    public function operaciones(Request $_request){
        $action = str_before($_request->input('action'),',');
        $id = str_after($_request->input('action'),',');
       
        switch ($action){
            case 'agregar':
                $tarea = $_request->input("tarea");
                if($tarea != "") Session::push('lista_tareas', $tarea);   
                $array = session("lista_tareas");
                return redirect()->route('app.todo');
            break;
            
            case 'eliminar':
                $array = session("lista_tareas");
                unset($array[$id]);
                $array = array_values($array);
                session(["lista_tareas" => $array]);
                return redirect()->route('app.todo');         
            break;
        }
    }
}