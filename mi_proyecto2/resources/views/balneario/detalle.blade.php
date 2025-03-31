<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $zona['nombre'] }} | Balneario Paraíso</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Baloo 2', cursive;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #c2fcd3, #85f1ff);
            color: #333;
        }

        header {
            background-color: #00aaff;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 20px;
            box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
        }

        .imagen {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 10px;
            color: #0077b6;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        select, input, button {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            margin: 10px 0;
            border-radius: 10px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #00cba9;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #009f84;
        }

        .resumen {
            background-color: #f1f1f1;
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
        }

        .resumen ul {
            padding-left: 20px;
            margin-top: 10px;
        }

        .volver {
            text-decoration: none;
            color: #0077b6;
            display: inline-block;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .volver:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header>
        <h2>{{ $zona['nombre'] }}</h2>
    </header>

    <div class="container">
        <a href="{{ url('/') }}" class="volver">⬅ Volver al inicio</a>

        <img class="imagen" src="{{ asset('images/' . $zona['imagen']) }}" alt="{{ $zona['nombre'] }}">

        <p>{{ $zona['descripcion'] }}</p>

        <h3>Elige lo que deseas comprar</h3>

        <select id="opciones">
            <option value="0">-- Selecciona un servicio --</option>
            @foreach ($costos as $nombre => $precio)
                <option value="{{ $precio }}">{{ $nombre }} - ${{ $precio }}</option>
            @endforeach
        </select>

        <input type="number" id="cantidad" value="1" min="1" placeholder="Cantidad">

        <button onclick="agregarAlCarrito()">Agregar al carrito</button>

        <div class="resumen">
            <h4>Resumen de compra</h4>
            <ul id="listaCompra"></ul>
            <p><strong>Total: $<span id="total">0</span></strong></p>
            <button onclick="finalizarCompra()">Finalizar compra</button>
        </div>
    </div>

    <script>
        let total = 0;
        let carrito = [];

        function agregarAlCarrito() {
            let select = document.getElementById("opciones");
            let cantidad = parseInt(document.getElementById("cantidad").value);
            let precio = parseInt(select.value);
            let nombre = select.options[select.selectedIndex].text;

            if (precio > 0 && cantidad > 0) {
                let subtotal = precio * cantidad;
                total += subtotal;

                carrito.push({ nombre, cantidad, subtotal });

                let lista = document.getElementById("listaCompra");
                let item = document.createElement("li");
                item.textContent = `${nombre} x${cantidad} - $${subtotal}`;
                lista.appendChild(item);

                document.getElementById("total").textContent = total;
            } else {
                alert("Selecciona un servicio válido y una cantidad mayor a 0.");
            }
        }

        function finalizarCompra() {
            if (carrito.length === 0) {
                alert("No hay productos en el carrito.");
                return;
            }

            alert(`¡Gracias por tu compra! Total: $${total}`);
            carrito = [];
            total = 0;
            document.getElementById("listaCompra").innerHTML = '';
            document.getElementById("total").textContent = '0';
        }
    </script>

</body>
</html>
