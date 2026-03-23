<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Mi sitio')</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            color: #111827;
        }

        nav {
            padding: 20px 35px;
            border-bottom: 1px solid #e5e7eb;
        }

        nav a {
            text-decoration: none;
            color: #222;
            font-size: 18px;
            margin-right: 5px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            padding: 40px 35px;
        }

        h1 {
            font-size: 64px;
            margin-bottom: 20px;
        }

        p {
            font-size: 28px;
            line-height: 1.4;
        }
    </style>
</head>
<body>

    <nav>
        <a href="{{ route('inicio') }}">Inicio</a> |
        <a href="{{ route('blog') }}">Blog</a> |
        <a href="{{ route('crear') }}">Crear</a> |
        <a href="{{ route('categoria') }}">Categorías</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>