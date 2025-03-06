<?php
// suscripcion.php
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suscripción</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0D1B2A;
            color: white;
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            gap: 20px;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        .card h2 {
            margin-bottom: 15px;
        }

        .card ul {
            list-style: none;
            padding: 0;
        }

        .card ul li {
            margin-bottom: 10px;
        }

        .subscribe-button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 10px;
            background-color: #0D1B2A;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h2>HÉROE</h2>
            <ul>
                <li>Acceso exclusivo a perks premium</li>
                <li>Eliminación de anuncios</li>
                <li>Encuentra el mejor contenido y accede a herramientas exclusivas</li>
                <li>Título de nombre exclusivo y un espacio en la web mostrando tu apoyo con la comunidad</li>
            </ul>
            <button class="subscribe-button">Suscribirse</button>
        </div>
        <div class="card">
            <h2>MAESTRO</h2>
            <ul>
                <li>Acceso exclusivo a perks premium</li>
                <li>Eliminación de anuncios</li>
                <li>Encuentra el mejor contenido y accede a herramientas exclusivas</li>
                <li>Título de nombre exclusivo y un espacio en la web mostrando tu apoyo con la comunidad</li>
                <li>Puesto exclusivo en la búsqueda de GMs</li>
            </ul>
            <button class="subscribe-button">Suscribirse</button>
        </div>
    </div>
    <div class="footer">
        &copy; 2024 RolConnect. Todos los Derechos Reservados.
    </div>
</body>

</html>