@extends('layouts.formmaster')

@section('agregar')
    <h2>Agrege una tarea</h2>
    @include("partials.todo.agregar")
@endsection

@section('lista')
    <h2>Lista de tareas</h2>
    <ul>
        @for($i=0; $i<count($lista); $i++)
            <li>
                <div class='linea'>{{$lista[$i]}}</div>
                @include("partials.todo.eliminar")
            </li>
        @endfor
    </ul>
@endsection