<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formulario(){
        session()->has('tareas') ? $lista = session('tareas') : $lista = [];
        return view ('todo.form',['lista' => $lista]);
    }

    public function agregar(Request $request){
        if ($request->input('tarea') != "") $request->session()->push('tareas',$request->input('tarea'));
        return redirect()->route('app.form'); 
    }

    public function eliminar(Request $request){
        $tareas = session("tareas");
        unset($tareas[$request->input('id')]);
        session(["tareas" => array_values($tareas)]); 
        return redirect()->route('app.form'); 
    }
}
