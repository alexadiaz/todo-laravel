<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">

<form action="{{route('app.operaciones')}}" method="POST">
    <h1>Todo</h1>
    <input type="text" name="tarea">
    {{ csrf_field() }}
    <button type="submit" name="action" value="agregar">Agregar</button>

    @if (!empty($array))
        <ul>
            @for ($i=0; $i<count($array); $i++)
                <li>
                    <div class="linea">{{ $array[$i] }}</div>
                    <button type="submit" name="action" value="editar">Editar</button>
                    <button type="submit" name="action" value="{{$i}}" data-value="{{$i}}">Eliminar</button>
                </li>
            @endfor
        </ul>
    @endif
</form>