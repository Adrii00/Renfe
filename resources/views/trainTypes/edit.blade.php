<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Tren</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1>Editar Tren</h1>

        <form action="{{ route('trainTypes.update', ['trainType' => $trainType->id]) }}" method="post">
            @csrf
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input type="text" class="form-control" name="tipo" id="tipo" value="{{ $trainType->type }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
        <a href="{{ url('/') }}" class="btn btn-primary btn-sm float-right mt-2">Ir a la página principal</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
