<nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="text-xl font-bold">Autolavado</a>

        <!-- Menú de Navegación -->
        <ul class="flex space-x-4">
            <li><a href="{{ route('home') }}" class="hover:text-gray-400">Inicio</a></li>
            <li><a href="{{ route('services.index') }}" class="hover:text-gray-400">Servicios</a></li>
            <li><a href="{{ route('promotions.index') }}" class="hover:text-gray-400">Promociones</a></li>
            <li><a href="{{ route('contact.index') }}" class="hover:text-gray-400">Contacto</a></li>
        </ul>

        <!-- Botón de Inicio de Sesión o Cerrar Sesión -->
        <div>
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-500 px-4 py-2 rounded">Cerrar sesión</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="bg-green-500 px-4 py-2 rounded">Iniciar sesión</a>
            @endauth
        </div>
    </div>
</nav>
