@extends("layouts.master")

@section("contenido")
    <p>Alexa</p>

    @include("partials.myform")

    <a href="{{ route('pag.mauro', ['n1' => 1, 'n2' => 2]) }}">To Mauro</a>

@endsection