<h3>Lista de tareas</h3>
    <ul>
        @for($i=0; $i<count($lista); $i++)
            <li>
                <div class='linea'>{{$lista[$i]}}</div>
                @include('partials.todo.editar')
                @include("partials.todo.eliminar")
            </li>
        @endfor
    </ul>  