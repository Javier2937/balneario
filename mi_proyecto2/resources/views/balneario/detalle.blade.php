<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de {{ $zona['nombre'] }}</title>
</head>
<body>
    <a href="{{ url('/') }}">⬅ Regresar</a>
    <h1>{{ $zona['nombre'] }}</h1>
    <img src="{{ asset('images/' . $zona['imagen']) }}" alt="{{ $zona['nombre'] }}" width="400">
    <p>{{ $zona['descripcion'] }}</p>

    <h2>Tarifas</h2>
    <ul>
        <li>Espacio para casa de campaña: $350</li>
        <li>Renta de casa de campaña (4 personas): $150</li>
        <li>Renta de casa de campaña (8 personas): $180</li>
        <li>Renta de casa de campaña (12 personas): $220</li>
        <li>Cabaña para 4 personas: $2500</li>
        <li>Cabaña para 6 personas: $3000</li>
        <li>Silla: $30</li>
        <li>Mesa: $50</li>
        <li>Sombrilla: $50</li>
        <li>Entrada al parque:
            <ul>
                <li>Adulto: $180</li>
                <li>Niño: $120</li>
            </ul>
        </li>
    </ul>
</body>
</html>
