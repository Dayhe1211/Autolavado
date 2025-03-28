<!-- resources/views/client/cart.blade.php -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">

        <h1 class="mb-4">🛒 Carrito de Combos</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(count($cart) > 0)
            <ul class="list-group mb-3">
                @foreach($cart as $id => $combo)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $combo }}
                        <form action="{{ route('client.cart.remove', ['id' => $id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </li>
                @endforeach
            </ul>

            <p><strong>Total de combos:</strong> {{ count($cart) }}</p>

            <a href="{{ route('client.cart.proceed') }}" class="btn btn-success">✔️ Reservar cita</a>
            <a href="{{ route('client.services') }}" class="btn btn-secondary">← Seguir eligiendo combos</a>
        @else
            <div class="alert alert-info">El carrito está vacío.</div>
            <a href="{{ route('client.services') }}" class="btn btn-primary">Ver combos disponibles</a>
        @endif

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
