<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Lib\TablesEX;


class FormControllerDb extends Controller
{
    public function consultar_v1(Request $request){

        $activo = $request->input('activo');
        $dias = $request->input('dias');

        /*
        if($activo != '' && $dias != ''){
            $res = DB::select("select * from tareas where activo = ? and dias = ?", [$activo, $dias]);
        }
        else if($activo != '' && $dias == ''){
            $res = DB::select("select * from tareas where activo = ?", [$activo]);
        }
        else if($activo == '' && $dias != ''){
            $res = DB::select("select * from tareas where dias = ?", [$dias]);
        }
        else {
            $res = DB::select("select * from tareas");
        }
        */

        // $query = "select * from tareas ";
        
        // $filter = array();
        // $p = array();

        // if($activo != ''){
        //     array_push($filter, "activo");
        //     array_push($p, $activo);
        // }
        // if($dias != ''){
        //     array_push($filter, "dias");
        //     array_push($p, $dias);
        // }

        // if(count($filter) == 0){
        //     $res = DB::select($query);
        // }
        // else {
        //     $query = $query . " where ";
        //     foreach($filter as $value){
        //         $query = $query . $value . " = ? and ";
        //     }
        //     $query = $query . " 1 = 1";

        //     $res = DB::select($query, $p);
        // }

        
        // echo "<pre>";
        // print_r($res);
        // echo "</pre>";

        
    }

    public function consultar_v2(Request $request){


        $activo = $request->input('activo');
        $dias = $request->input('dias');

        $query = DB::table(TablesEX::$tables["tareas"])->select(TablesEX::$tareasColumns["nombre"]);

        if($activo != ''){
            $query = $query->where(TablesEX::$tareasColumns["activo"], '=', $activo);
        }

        if($dias != ''){
            $query = $query->orWhere(TablesEX::$tareasColumns['dias'], '=', $dias);
        }

        $res = $query->get();

        echo "<pre>";
        print_r($res);
        echo "</pre>";

    }

    public function insertar_v1(Request $request){
        $nombre = $request->input('nombre');

        $query = DB::table(TablesEX::$tables["tareas"])
            ->insert([TablesEX::$tareasColumns["nombre"] => $nombre]);
    }

    public function consultar_v3(Request $request){

        $activo = $request->input('activo');
        $dias = $request->input('dias');

        $tareas = \App\Tarea::get();

        foreach($tareas as $tarea){
            echo $tarea->nombre;
        }
        
    }

    public function insertar_v3(Request $request){
        
        $nombre = $request->input('nombre');

        $newTarea = new \App\Tarea;
        $newTarea->nombre = $nombre;
        $newTarea->save();
        
    }


    
}