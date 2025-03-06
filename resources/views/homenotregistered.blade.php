<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RolConnect - Home</title>

    <style>
        body {
            background-color: #1e3a8a;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #1e40af;
            padding: 15px 30px;
            box-sizing: border-box;
        }

        .logo {
            height: 80px;
            /* Ajuste el tamaño del logo */
        }

        .login-button {
            background-color: #10b981;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .login-button:hover {
            background-color: #059669;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
            flex: 1;
        }

        /* Distribuir las tarjetas en 3 columnas en pantallas grandes */
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* 3 columnas */
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background-color: #374151;
            padding: 20px;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            height: 300px;
            /* Establecer una altura para las tarjetas */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.2);
        }

        .card-img {
            width: 100%;
            height: 180px;
            border-radius: 10px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .footer {
            text-align: center;
            background-color: #111827;
            padding: 15px;
            margin-top: 20px;
            font-size: 14px;
        }

        /* Media query para pantallas más pequeñas */
        @media (max-width: 1200px) {
            .grid {
                grid-template-columns: repeat(2, 1fr);
                /* 2 columnas */
            }
        }

        /* Media query para pantallas muy pequeñas (móviles) */
        @media (max-width: 768px) {
            .grid {
                grid-template-columns: 1fr;
                /* Una sola columna */
            }

            .logo {
                height: 70px;
                /* Reducir el tamaño del logo en móviles */
            }

            .login-button {
                font-size: 14px;
                /* Ajustar el tamaño del texto del botón */
                padding: 8px 15px;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <img src="/images/RolConnect_SinFondo_SinLetras_Blanco.png" alt="RolConnect Logo" class="logo">
        <a href="{{ route('login') }}" class="login-button">Iniciar sesión / Registrarme</a>
    </header>

    <main class="container">
        <div class="grid">
            <div class="card" onclick="location.href='login'">
                <img src="/images/subscripcion.jpg" alt="Suscripción" class="card-img">
                <h2>Suscripción</h2>
                <p>Explora los beneficios de suscribirte a RolConnect</p>
            </div>
            <div class="card" onclick="location.href='login'">
                <img src="/images/game_masters.jpg" alt="Game Masters" class="card-img">
                <h2>Game Masters</h2>
                <p>Encuentra tu Game Master perfecto para dirigir tu aventura</p>
            </div>
            <div class="card" onclick="location.href='login'">
                <img src="/images/noticias.jpg" alt="Noticias" class="card-img">
                <h2>Noticias</h2>
            </div>
            <div class="card" onclick="location.href='login'">
                <img src="/images/novedades.jpg" alt="Novedades" class="card-img">
                <h2>Novedades</h2>
            </div>
            <div class="card" onclick="location.href='login'">
                <img src="/images/comunidad.jpg" alt="Comunidad" class="card-img">
                <h2>Comunidad</h2>
                <p>Encuentra tu Game Master perfecto para dirigir tu aventura</p>
            </div>
            <div class="card" onclick="location.href='login'">
                <img src="/images/grupos.jpg" alt="Grupos" class="card-img">
                <h2>Grupos</h2>
                <p>Encuentra tu Game Master perfecto para dirigir tu aventura</p>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2024 RolConnect. Todos los Derechos Reservados.</p>
    </footer>
</body>

</html>