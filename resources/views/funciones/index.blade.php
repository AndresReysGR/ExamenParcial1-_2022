<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de funciones</title>
</head>
<body>
    <h1>Funciones</h1>
    @if(Session::has('success'))
        <p style="color: green;">{{Session::get('success')}}</p>
    @endif
    @if(Session::has('error'))
        <p style="color: red;">{{Session::get('error')}}</p>
    @endif
    <p>*Updated Juanuary 28th</p>
    <a href="{{route('funciones.create')}}">Add Variant</a>
    <table>
        <thead>
            <tr>
                <th>Película</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funciones as $funcion)
                <tr>
                    <td>{{$funcion->pelicula}}</td>
                    <td>{{$funcion->fecha}}</td>
                    <td>{{$funcion->hora}}</td>
                            
                    <td><form method="post" action="{{route('funciones.destroy', $funcion->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                        <!--<td><button>Eliminar</button></td>-->
                    </form>
                    </dt>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>