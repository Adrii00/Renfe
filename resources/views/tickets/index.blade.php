<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1 class="mb-4">Tickets Disponibles</h1>

        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Tren</th>
                    <th scope="col">Tipo de ticket</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                    <tr>
                        <td>{{$ticket->date}}</td>
                        <td>{{$ticket->price}}</td>
                        <td>{{$ticket->train->name}}</td>
                        <td>{{$ticket->ticket_type->type}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <form action="{{ route('tickets.show', ['ticket' => $ticket->id]) }}" method="get">
                                    <button type="submit" class="btn btn-info btn-sm mr-2">Ver</button>
                                </form>
                                <form action="{{ route('tickets.edit', ['ticket' => $ticket->id]) }}" method="get">
                                    <button type="submit" class="btn btn-warning btn-sm mr-2">Editar</button>
                                </form>
                                <form action="{{ route('tickets.destroy', ['ticket' => $ticket->id]) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('tickets.create') }}" class="btn btn-success btn-sm float-right mt-2 mr-2">Crear nuevo</a>
        <a href="{{ url('/') }}" class="btn btn-primary btn-sm float-right mt-2">Ir a la página principal</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
