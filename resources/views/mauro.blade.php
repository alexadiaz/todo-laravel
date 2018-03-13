@extends("layouts.master")

@section("contenido")
    
    <h1>mauro {{ $res }}</h1>

    <a href="{{ route('pag.alexa') }}">To Alexa</a>

    @include("partials.myform")

@endsection