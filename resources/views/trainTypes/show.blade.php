<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver tipo de tren</title>
</head>
<body>
    <p>Tipo: {{ $trainType -> type }}</p>
    <p>Creado el: {{ $trainType -> created_at }}</p>
</body>
</html>