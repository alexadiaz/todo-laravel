@extends('layouts.form_master')

@section('formulario')
    <h3>Modifique la tarea</h3>
    <form action="{{route('app.modificar')}}" method='POST'>
        <input type="hidden" name='id' value="{{$id}}">
        <input type="text" name='tarea' value="{{$tarea}}">
        {{ csrf_field() }}
        <button type="submit">modificar</button>
    <a href="{{route('app.form')}}">cancelar</a>
    </form>
@endsection