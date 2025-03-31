<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <style>
        form {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        button {
            width: 100%;
            padding: 10px;
        }
        .error {
            color: red;
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
