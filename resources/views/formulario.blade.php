<form action="{{ route('app.haceroperacion') }}" method="POST">

    N1: <input type="text" name="n1"> <br>
    N2: <input type="text" name="n2"> <br>

    <input type="hidden" name="operacion" value="{{ $operacion }}" />

    {{ csrf_field() }}

    <button type="submit">Guardar</button>

</form>