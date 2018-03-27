<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
        <title>Todo</title>
    </head>
    <body>
        <h1>Todo</h1>
        @yield("titulo")
        @yield("formulario")
        <h3>Lista de tareas</h3>
        @include('partials.todo.form_lista')
    </body>
</html>