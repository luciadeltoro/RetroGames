<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo') · RetroGame Hub</title>

    @vite(['resources/css/app.css'])
</head>
<body>

    <header class="header">
        <h1>🎮 RetroGame Hub</h1>
        <p>Clásicos inolvidables del videojuego</p>
    </header>

    <main class="container">
        @yield('contenido')
    </main>

    <footer class="footer">
        <p>Proyecto Laravel · RetroGame Hub</p>
    </footer>

</body>
</html>
