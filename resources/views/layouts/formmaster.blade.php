<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
        <title>Todo</title>
    </head>
    <body>
        <h1>Todo</h1>
        @yield("agregar")
        
        @if(!empty($lista))
            @yield("lista")
        @endif
       
    </body>
</html>