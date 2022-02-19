<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Funcion</title>
    
</head>
<body>
    <h1>Create Variant</h1>
    <a href="{{route('funciones.index')}}">Back to list</a>
    <form method="post" action="{{route('funciones.store')}}">
        @csrf
        <label>Pelicula</label>
        <input type="text" name="pelicula">
        <br/>
        <label>Fecha</label>
        <input type="text" name="fecha">
        <br/>
        <label>Hora</label>
        <input type="text" name="hora">
        <br/>
        <button type="submit">Save new funcion</button>
        <br/>
    </form>
</body>
</html>