<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formulario(){
        session()->has('tareas') ? $lista = session('tareas') : $lista = [];
        return view ('todo.form',['lista' => $lista]);
    }

    public function formulario_editar($id){
        $tareas = session('tareas');
        $tarea = $tareas[$id];
        return view ('todo.form_editar',['id' =>$id,'tarea' => $tarea]);
    }

    public function agregar(Request $request){
        if ($request->input('tarea') != "") $request->session()->push('tareas',$request->input('tarea'));
        return redirect()->route('app.form'); 
    }

    public function editar (Request $request){
        $id = $request->input('id');
        return redirect()->route('app.form_editar',['id'=>$id]); 
    }

    public function modificar (Request $request){
        $tareas = session('tareas');
        $tareas[$request->input('id')] = $request->input('tarea');
        session(['tareas'=> $tareas]);
        return redirect()->route('app.form');  
    }

    public function eliminar(Request $request){
        $tareas = session("tareas");
        unset($tareas[$request->input('id')]);
        session(["tareas" => array_values($tareas)]);
        return redirect()->route('app.form'); 
    }
}
