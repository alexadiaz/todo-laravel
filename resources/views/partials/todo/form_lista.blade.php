<ul>
    @forelse($lista as $tarea)
        <li>
            <div class='linea'>{{$tarea}}</div>
            <a href="{{route('app.form_editar',['id'=>$loop->index])}}">editar</a>
            <form action="{{route('app.eliminar')}}" method ="POST" class='linea'>
                {{ csrf_field() }}
                <button type='submit' name="id" value='{{$loop->index}}'>eliminar</button>
            </form>
        </li>
    @empty
        <div>No hay tareas guardadas</div>
    @endforelse
</ul>  