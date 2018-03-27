@extends('layouts.form_master')

@section('titulo')
    <h1>Session</h1>
@endsection

@section('formulario')
    <h3>Agrege una tarea</h3>
    <form action="{{route('app.agregar')}}" method='POST'>
        <input type="text" name='tarea'>
        {{ csrf_field() }}
        <button type="submit">Agregar</button>
    </form>
@endsection