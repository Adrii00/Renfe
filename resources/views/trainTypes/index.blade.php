<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de trenes</title>
</head>
<body>
    <h1>Tipos de trenes</h1>
    <table>
        <thead>
            <tr>
                <th>Tipo de tren</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trainTypes as $trainType)
                <tr>
                    <td>{{$trainType->type}}</td>
                    <td><form action="{{ route('trainTypes.show', ['trainType' => $trainType->id]) }}" method="get">
                        <input type="submit" value="Ver">
                    </form></td>
                    <td>
                        <form action="{{ route('trainTypes.edit', ['trainType' => $trainType->id]) }}" method="get">
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('trainTypes.destroy', ['trainType' => $trainType->id]) }}" method="post">
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