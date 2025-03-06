<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RolConnect - Registro</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            background-color: #1e3a8a;
        }

        .left-section {
            width: 60%;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 5px;
            padding: 10px;
        }

        .left-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: 2px solid #073b80;
        }

        .right-section {
            width: 40%;
            background-color: #1e3a8a;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .logo {
            width: 300px;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 22px;
            margin-bottom: 15px;
        }

        .form-group {
            width: 100%;
            max-width: 300px;
            margin-bottom: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #0f2a5b;
            color: white;
            outline: none;
        }

        input::placeholder {
            color: #b3c2dd;
        }

        .forgot-password {
            display: block;
            text-align: right;
            font-size: 12px;
            color: #10b981;
            text-decoration: none;
            margin-bottom: 15px;
        }

        .register-button {
            width: 100%;
            max-width: 300px;
            padding: 12px;
            background-color: #10b981;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .register-button:hover {
            background-color: #059669;
        }

        .login-link {
            margin-top: 10px;
            font-size: 14px;
        }

        .login-link a {
            color: #10b981;
            text-decoration: none;
        }

        .error-message {
            color: red;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="left-section">
        <img src="images/Imagen1_Login.png" alt="Imagen 1">
        <img src="images/Imagen2_Login.png" alt="Imagen 2">
        <img src="images/Imagen3_Login.png" alt="Imagen 3">
        <img src="images/Imagen4_Login.png" alt="Imagen 4">
    </div>

    <div class="right-section">
        <img src="images/RolConnect_SinFondo_Blanco.png" alt="RolConnect Logo" class="logo">
        <h2>Registrarse</h2>

        @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div>
                <label for="nombre_usuario">Nombre de Usuario:</label>
                <input type="text" id="nombre_usuario" name="nombre_usuario" required>
            </div>
            <div>
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div>
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" required>
            </div>
            <div>
                <label for="contraseña_confirmation">Confirmar Contraseña:</label>
                <input type="password" id="contraseña_confirmation" name="contraseña_confirmation" required>
            </div>
            <button type="submit">Registrarse</button>
        </form>
        <p class="login-link">¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>
    </div>

</body>

</html>