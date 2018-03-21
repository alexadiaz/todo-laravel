<form action="{{route('app.eliminar')}}" method ="POST" class='linea'>
    {{ csrf_field() }}
    <button type='submit' name="id" value='{{$i}}'>eliminar</button>
</form>