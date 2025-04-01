<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tickets Generados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f8ff;
            padding: 30px;
        }
        .ticket {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.2);
        }
        h2 {
            margin-top: 0;
        }
        ul {
            padding-left: 20px;
        }
    </style>
</head>
<body>

    <h1>🧾 Tickets Generados</h1>

    @if (count($tickets) === 0)
        <p>No hay tickets generados todavía.</p>
    @endif

    @foreach ($tickets as $ticket)
        <div class="ticket">
            <h2>Ticket ID: {{ $ticket['ticket_id'] }}</h2>
            <p><strong>Fecha:</strong> {{ $ticket['fecha'] }}</p>
            <p><strong>Total:</strong> ${{ $ticket['total'] }}</p>
            <h4>Productos:</h4>
            <ul>
                @foreach ($ticket['productos'] as $item)
                    <li>{{ $item['nombre'] }} x{{ $item['cantidad'] }} - ${{ $item['subtotal'] }}</li>
                @endforeach
            </ul>
        </div>
    @endforeach

</body>
</html>
