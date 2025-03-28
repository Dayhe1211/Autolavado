<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #131416;
            color: white;
            text-align: center;
            padding: 50px;
        }

        .btn-custom {
            margin-top: 20px;
            width: 250px;
        }

        .btn-container {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
    </style>
</head>

<body>

    <h1>Bienvenido a nuestro Autolavado</h1>

    <div class="btn-container">
        <!-- Botón Usuario -->
        <a href="{{ route('client.login') }}" class="btn btn-primary btn-custom">
            Iniciar Sesión Usuario
        </a>

        <!-- Botón Administrador -->
        <a href="{{ route('login') }}" class="btn btn-secondary btn-custom">
            Iniciar Sesión Administrador
        </a>
    </div>

</body>

</html>
