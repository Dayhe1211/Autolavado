<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Servicio</title>
</head>
<body>

    <h1>Editar Servicio</h1>

    <form action="{{ route('services.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{ $service->name }}" required>

        <label for="description">Descripción:</label>
        <textarea name="description" required>{{ $service->description }}</textarea>

        <button type="submit">Actualizar</button>
    </form>

    <a href="{{ route('services.index') }}">Volver a la lista</a>

</body>
</html>
