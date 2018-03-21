<form action="{{route('app.agregar')}}" method='POST'>
    <input type="text" name='tarea'>
    {{ csrf_field() }}
    <button type="submit">Agregar</button>
</form>