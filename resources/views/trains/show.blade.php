<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Tren</title>
</head>
<body>
    <p>Nombre: {{ $train -> name }}</p>
    <p>Pasajeros: {{ $train -> passengers }}</p>
    <p>Año: {{ $train -> year}}</p>
    <p>Tipo de tren: {{ $train -> train_type->type }}</p>
</body>
</html>