<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Fuente Outfit y Estilos -->
    <style>
        @font-face {
            font-family: 'Outfit';
            src: url('{{ asset('fonts/Outfit-Regular.ttf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        /* ✅ Mantener fondo oscuro */
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #131416 !important;
            color: white;
        }

        /* ✅ Ajustar imagen de portada */
        .portada {
            width: 100%;
            height: 250px; /* Ajusta la altura según necesites */
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .portada img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* ✅ Estilos de la tabla */
        .table-dark {
            background-color: #1E1E1E;
        }

        /* ✅ Botón de agregar servicio */
        .btn-custom {
            background-color: #B1F445;
            color: black;
            font-weight: bold;
        }
    </style>

    <title>Lista de Servicios</title>
</head>

<body>

    <!-- ✅ Imagen de Portada -->
    <div class="portada">
        <img src="{{ asset('images/portada.png') }}" class="portada-img" alt="Portada">
    </div>

    <div class="container mt-4">

        <!-- ✅ Botón de Cerrar Sesión -->
        <div class="text-end mb-3">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
            </form>
        </div>

        <h1 class="text-center text-white">Lista de Servicios</h1>

        <!-- ✅ Mensaje de éxito -->
        @if(session('success'))
            <p class="alert alert-success text-center">{{ session('success') }}</p>
        @endif

        <!-- ✅ Botón para agregar servicio -->
        <div class="text-start mb-3">
            <a class="btn btn-custom" href="{{ route('services.create') }}">Agregar Nuevo Servicio</a>
        </div>

        <!-- ✅ Tabla de Servicios -->
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>
                            <a href="{{ route('services.edit', $service) }}" class="btn btn-success btn-sm">Editar</a>
                            <form action="{{ route('services.destroy', $service) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('¿Seguro que quieres eliminar este servicio?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
