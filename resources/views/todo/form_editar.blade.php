@extends('layouts.formmaster')

@section('titulo')
    <h1>Todo Session</h1>
@endsection

@section('formulario')
    <h3>Modifique la tarea</h3>
    
    <form action="{{route('app.modificar')}}" method='POST'>
        <input type="hidden" name='id' value="{{$id}}">
        <input type="text" name='tarea' value="{{$tarea}}">
        {{ csrf_field() }}
        <button type="submit">Modificar</button>
    </form>
@endsection