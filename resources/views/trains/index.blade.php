<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trenes</title>
</head>
<body>
    <h1>Trenes en activo</h1>
    
    <table>
        <thead>
            <tr>
                <th>Nombre del tren</th>
                <th>Pasajeros</th>
                <th>Año</th>
                <th>Tipo de tren</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{$train->name}}</td>
                    <td>{{$train->passengers}}</td>
                    <td>{{$train->year}}</td>
                    <td>{{$train->train_type->type}}</td>
                    <td><form action="{{ route('trains.show', ['train' => $train->id]) }}" method="get">
                        <input type="submit" value="Ver">
                    </form></td>
                    <td>
                        <form action="{{ route('trains.edit', ['train' => $train->id]) }}" method="get">
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('trains.destroy', ['train' => $train->id]) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" value="Borrar">
                        </form>
                    </td>
                    
                    
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>