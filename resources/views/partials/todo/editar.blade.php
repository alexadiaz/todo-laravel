<form action="{{route('app.editar')}}" method="POST" class='linea'>
    {{ csrf_field() }}  
    <button type='submit' name="id" value='{{$i}}'>editar</button>
</form>