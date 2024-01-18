<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Tren</title>
</head>
<body>
    <form action="{{ route('trains.update', ['train' => $train -> id]) }}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <label>Nombre</label>
        <input type="text" name="nombre" value="{{$train->name}}"><br><br>
        <label>Pasajeros</label>
        <input type="number" step="1" name="pasajeros" id="">
        <label>Año</label>
        <input type="number" name="year"><br><br>
        <label>Tipo de tren</label>
        <select name="tipo" id="">
            @foreach ($tipos as $tipo)
                <option value="{{$tipo->id}}">{{$tipo->type}}</option>
            @endforeach
        </select>
        <input type="submit" value="Editar">
    </form>
</body>
</html>