<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Servicio</title>
</head>
<body>
    <h1>Agregar Nuevo Servicio</h1>

    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre" required>
        <textarea name="description" placeholder="Descripción" required></textarea>
        <button type="submit">Guardar</button>
    </form>

    <a href="{{ route('services.index') }}">Volver</a>
</body>
</html>
