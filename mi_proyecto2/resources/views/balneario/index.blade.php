<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Balneario Paraíso</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Baloo 2', cursive;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #b2fefa, #0ed2f7);
            color: #333;
        }
        header {
            background-color: #00aaff;
            color: white;
            padding: 20px;
            text-align: center;
            border-bottom: 5px solid #0088cc;
        }
        .container {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }
        .top-bar {
            text-align: right;
            margin-bottom: 20px;
        }
        .top-bar a {
            color: white;
            background-color: #ff9800;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
        }
        .top-bar a:hover {
            background-color: #e68900;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .galeria {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }
        .galeria a {
            text-decoration: none;
            color: #333;
            text-align: center;
        }
        .galeria img {
            width: 250px;
            height: 180px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 3px 3px 12px rgba(0,0,0,0.3);
            transition: transform 0.3s ease;
        }
        .galeria img:hover {
            transform: scale(1.05);
        }
        .galeria p {
            margin-top: 10px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>

    <header>
        <h1>Balneario Paraíso 🌊☀️</h1>
        <div class="top-bar">
            @if(session('usuario'))
                <span>Bienvenido, <strong>{{ session('usuario') }}</strong></span>
                <a href="{{ url('/logout') }}">Cerrar sesión</a>
            @else
                <a href="{{ route('login') }}">Iniciar Sesión como Administrador</a>
            @endif
        </div>
    </header>

    <div class="container">
        <h2>Explora nuestras zonas</h2>
        <div class="galeria">
            @foreach ($zonas as $zona)
                <a href="{{ url('/detalle/' . $zona['id']) }}">
                    <img src="{{ asset('images/' . $zona['imagen']) }}" alt="{{ $zona['nombre'] }}">
                    <p>{{ $zona['nombre'] }}</p>
                </a>
            @endforeach
        </div>
    </div>

</body>
</html>
