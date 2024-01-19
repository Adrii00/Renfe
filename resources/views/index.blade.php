<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h1 class="mt-4">Bienvenido al Index</h1>

        <div class="row">
            <div class="col-md-3">
                <a href="{{ route('ticketTypes.index') }}" class="btn btn-dark btn-block">Tipo Tickets</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('tickets.index') }}" class="btn btn-dark btn-block">Tickets</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('trains.index') }}" class="btn btn-dark btn-block">Trenes</a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('trainTypes.index') }}" class="btn btn-dark btn-block">Tipo Trenes</a>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


