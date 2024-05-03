<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    @extends('Persona.navbar')
    @section('contenido')
        <div class="bg-gradient-to-br from-blue-400 to-purple-800 text-white py-8 px-4 mb-20">
            <h1 class="text-center text-3xl md:text-5xl lg:text-7xl font-bold">Framework Frontend</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="flex justify-center">
                <div class="max-w-xs md:max-w-sm rounded overflow-hidden shadow-lg bg-white m-4 mx-10 ">
                    @foreach ($datos as $dato)
                        <img class="w-full" src="{{ $dato['imagen'] }}" alt="{{ $dato['nombre'] }}">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $dato['nombre'] }}</div>
                            <p class="text-gray-700 text-base">{{ $dato['comentario'] }}</p>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>


        <div class="bg-gradient-to-br from-red-400 to-purple-800 text-white py-8 px-4 mb-20 mt-20">
            <h1 class="text-center text-3xl md:text-5xl lg:text-7xl font-bold">Framework CSS</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="flex justify-center">
                <div class="max-w-xs md:max-w-sm rounded overflow-hidden shadow-lg bg-white m-4">
                    <img class="w-full"
                        src="https://picperf.io/https://laravelnews.s3.amazonaws.com/images/tailwindcss-1633184775.jpg"
                        alt="Vue Logo">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Tailwind</div>
                        <p class="text-gray-700 text-base">Tailwind CSS es un framework de utilidades de CSS que proporciona
                            una amplia variedad de clases predefinidas para estilizar elementos HTML. En lugar de
                            proporcionar estilos predefinidos, Tailwind ofrece clases utilitarias que se aplican
                            directamente a los elementos HTML para modificar su apariencia y comportamiento</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="max-w-xs md:max-w-sm rounded overflow-hidden shadow-lg bg-white m-4">
                    <img class="w-full"
                        src="https://www.etatvasoft.com/insights/wp-content/uploads/2017/02/b-thumb-img9.jpg"
                        alt="Vue Logo">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Bootstrap</div>
                        <p class="text-gray-700 text-base">Bootstrap es un framework de código abierto de CSS y JavaScript
                            que proporciona una amplia variedad de componentes y estilos predefinidos para ayudar en el
                            desarrollo rápido y fácil de interfaces web responsivas y atractivas. Está basado en el concepto
                            de diseño móvil primero (mobile-first), lo que significa que los diseños y componentes se
                            adaptan automáticamente a diferentes tamaños de pantalla, desde dispositivos móviles hasta
                            computadoras de escritorio.</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="max-w-xs md:max-w-sm rounded overflow-hidden shadow-lg bg-white m-4">
                    <img class="w-full"
                        src="https://raw.githubusercontent.com/jgthms/bulma/master/docs/images/bulma-banner.png"
                        alt="Vue Logo">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Bulma</div>
                        <p class="text-gray-700 text-base">Bulma es un framework de CSS que se enfoca en proporcionar una
                            estructura limpia y modular para el diseño de interfaces web. A diferencia de otros frameworks
                            como Bootstrap, Bulma no utiliza JavaScript, lo que lo hace más ligero y flexible.</p>
                    </div>
                </div>
            </div>

        </div>
    @endsection
</body>

</html>
