<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel - Mensaje Simple</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

        <!-- Estilos adicionales -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f4f4f9;
            }
            .message-container {
                text-align: center;
                font-size: 24px;
                color: #333;
            }
        </style>
    </head>
    <body>
        <div class="message-container">
            <h1>¡Bienvenido a Laravel!</h1>
            <p>Este es un mensaje simple que puedes ver en la página.</p>
        </div>
    </body>
</html>
