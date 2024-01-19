<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Ticket</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1 class="mb-4">Ver Ticket</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Fecha</h5>
                <p class="card-text">{{ $ticket->date }}</p>
                <h5 class="card-title">Precio</h5>
                <p class="card-text">{{ $ticket->price }}</p>
                <h5 class="card-title">Tren</h5>
                <p class="card-text">{{$tren->name}}</p>
                <h5 class="card-title">Tipo de ticket</h5>
                <p class="card-text">{{ $tipo->type }}</p>
            </div>
        </div>
        <a href="{{ url('/') }}" class="btn btn-primary btn-sm float-right mt-2">Ir a la página principal</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
