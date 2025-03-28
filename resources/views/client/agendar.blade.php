<!-- resources/views/client/agendar.blade.php -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">

        <h1>Confirmar Agendamiento</h1>

        <ul class="list-group mb-3">
            @foreach($cart as $combo)
                <li class="list-group-item">{{ $combo }}</li>
            @endforeach
        </ul>

        <p><strong>Total de combos:</strong> {{ count($cart) }}</p>

        <div class="alert alert-info">Aquí luego pondremos el formulario de fecha y hora para agendar la cita.</div>

        <a href="{{ route('client.services') }}" class="btn btn-secondary">Volver al inicio</a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
