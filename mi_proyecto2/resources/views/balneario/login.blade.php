<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
            width: 300px;
        }

        h2 { text-align: center; }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #00cba9;
            color: white;
            border: none;
            font-weight: bold;
            border-radius: 8px;
        }

        .error {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <h2>Iniciar Sesión</h2>

        @if (session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Ingresar</button>
    </form>

</body>
</html>
