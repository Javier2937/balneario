<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balneario</title>
    <style>
        .galeria {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .galeria img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Bienvenido al Balneario</h1>
    <a href="#">Iniciar Sesión como Administrador</a>

    <h2>Áreas del Balneario</h2>
    <div class="galeria">
        @foreach ($zonas as $zona)
            <a href="{{ url('/detalle/' . $zona['id']) }}">
                <img src="{{ asset('images/' . $zona['imagen']) }}" alt="{{ $zona['nombre'] }}">
                <p>{{ $zona['nombre'] }}</p>
            </a>
        @endforeach
    </div>
</body>
</html>
