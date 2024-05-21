<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frameworks frontend y backend</title>
    <!-- Incluyendo Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* body {
            background-image: url('{{ asset('images/img2.gif') }}');
            
        } */

        /* Estilos personalizados */
        .welcome-container {
            opacity: 0;
            /* Inicialmente oculto */
            transition: opacity 1s ease-in-out;
            /* Transición suave */
        }

        .loaded .welcome-container {
            opacity: 1;
            /* Aparece cuando la clase 'loaded' se agrega al body */
        }
    </style>
</head>

<body class="">
    @extends('Layouts.app')
    @section('contenido')
        <div class="text-white flex justify-center items-center min-h-screen">
            <!-- Div de bienvenida -->
            <div class="welcome-container text-center px-4">
                <h1 class="welcome-heading text-4xl sm:text-6xl md:text-7xl lg:text-8xl xl:text-9xl font-bold mb-4">
                    ¡Bienvenido!</h1>
                <p class="welcome-message text-xl sm:text-2xl md:text-3xl lg:text-4xl">Disfruta de tu experiencia en mi
                    sitio web</p>
            </div>
        </div>

        <!-- Script para agregar la clase 'loaded' al body después de un retraso -->
        <script>
            // Agrega la clase 'loaded' al body después de un retraso
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(function() {
                    document.body.classList.add('loaded');
                }, 100); // Retraso de 1 segundo
            });
        </script>
    @endsection
</body>

</html>
