<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RolConnect - Iniciar Sesión</title>
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

        .login-button {
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

        .login-button:hover {
            background-color: #059669;
        }

        .register-link {
            margin-top: 10px;
            font-size: 14px;
        }

        .register-link a {
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
        <h2>Iniciar sesión</h2>

        @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="email" name="correo" placeholder="Correo" required>
            </div>
            <div class="form-group">
                <input type="password" name="contraseña" placeholder="Contraseña" required>
            </div>
            <a href="#" class="forgot-password">¿Olvidaste algo? <span>Contraseña</span></a>
            <button type="submit" class="login-button">Continuar</button>
        </form>
        <p class="register-link">¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate</a></p>
    </div>

</body>

</html>