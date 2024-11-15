<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Agrega el archivo CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div>
            <a href="{{ route('vistaprincipal') }}">INICIO</a>
            <a href="{{ route('services') }}">SERVICIOS</a>
            <a href="{{ route('about') }}">NOSOTROS</a>
        </div>
        <div class="welcome">Bienvenido, Gabriel Lozano</div>
    </nav>

    <!-- Contenido Principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>DAGA Soluciones Técnicas © 2024</p>
    </footer>
</body>
</html>
