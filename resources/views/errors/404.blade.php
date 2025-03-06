<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #121212;
        }

        .container {
            display: flex;
            width: 80%;
            height: 70vh;
            text-align: center;
        }

        .side {
            width: 30%;
            background-size: cover;
            background-position: center;
        }

        .left {
            background-image: url('/images/Imagen4_Login.png');
            /* Imagen de la izquierda */
        }

        .right {
            background-image: url('/images/Imagen2_Login.png');
            /* Imagen de la derecha */
        }

        .center {
            width: 40%;
            background-color: #1a3b68;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        h1 {
            font-size: 3em;
            margin: 0;
        }

        h2 {
            margin: 10px 0;
        }

        p {
            font-size: 1.2em;
            margin: 20px;
        }

        .btn {
            text-decoration: none;
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1em;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="side left"></div>
        <div class="center">
            <h1>Oops!</h1>
            <h2>ERROR 404</h2>
            <p>Lo sentimos, parece que la página que estabas buscando no existe o no se encuentra disponible en este momento.</p>
            <a href="{{ url('/') }}" class="btn">Volver a RolConnect</a>
        </div>
        <div class="side right"></div>
    </div>
</body>

</html>