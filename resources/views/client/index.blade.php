<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autolavado | Combos y Servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://images.unsplash.com/photo-1603039612971-9f1536dfb71e') no-repeat center center fixed;
            background-size: cover;
            color: #f8f9fa;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 15px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.03);
        }

        .card-img-top {
            max-height: 200px;
            object-fit: cover;
            border-radius: 15px;
        }

        .btn-primary,
        .btn-success {
            border-radius: 25px;
        }

        footer {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            margin-top: 50px;
            text-align: center;
            color: #aaa;
            border-top: 1px solid #444;
        }

        .fondo-combos {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('/images/fondo.jpg') no-repeat center center fixed;
            background-size: cover;
            filter: blur(10px);
            z-index: -1;
        }

        .container {
            position: relative;
            z-index: 1;
        }

        .fondo-combos::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .btn-success {
            background-color: #3A8DFF; 
            color: white;
            font-weight: bold;
            border: none;
        }

        .btn-success:hover {
            background-color: #2C73B4; 
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">Autolavado LaBomba</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('client.login') }}" class="nav-link">Iniciar sesión Usuario</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Iniciar sesión Administrador</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('client.cart.show') }}" class="nav-link">🛒 Carrito ({{ session('cart') ? count(session('cart')) : 0 }})</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="fondo-combos"></div>

<div class="container mt-5">
    <h1 class="mb-4 text-center fw-bold">NUESTROS COMBOS BOMBA </h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @foreach($combos as $id => $combo)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/combos/combo'.$id.'.jpg') }}" class="card-img-top" alt="Imagen del combo {{ $combo }}">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-dark">{{ $combo }}</h5>
                        <form action="{{ route('client.cart.add', ['service' => $id]) }}" method="POST" class="mt-auto">
                            @csrf
                            <button type="submit" class="btn btn-success w-100">Agregar al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<footer>
    &copy; {{ date('Y') }} Autolavado Pro | Todos los derechos reservados.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
