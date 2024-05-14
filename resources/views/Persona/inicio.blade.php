<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Sitio web de framework</title>
</head>
<body>
    @extends('Layouts.app')
    @section('contenido')

    <div class="bg-gradient-to-r from-blue-300 to-blue-900 text-white text-center py-12 mb-20">
      <div class="container mx-auto px-4">
          <h1 class="text-4xl lg:text-6xl font-bold">Framework Backend</h1>
      </div>
  </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <div class="bg-gray-100 max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="https://proximahost.es/blog/wp-content/uploads/2022/05/Laravel.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Laravel</div>
          <p class="text-gray-700 text-base">
            Laravel utiliza un sistema de enrutamiento simple y expresivo que permite definir de manera clara las URL de tu aplicación y asociarlas con controladores y acciones específicas.
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-red-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
          <span class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
          <span class="inline-block bg-pink-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
        </div>
      </div>

      <div class="bg-gray-100 max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="https://cdn.hashnode.com/res/hashnode/image/upload/v1636780048014/niLN2J80j.png" alt="Sunset in the mountains">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">django</div>
          <p class="text-gray-700 text-base">
            Django es un framework web en Python que facilita la creación rápida y eficiente de aplicaciones web, proporcionando herramientas y funcionalidades predefinidas para el desarrollo.
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-red-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
          <span class="inline-block bg-blue-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
          <span class="inline-block bg-pink-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
        </div>
      </div>


      

    </div>


    @endsection
</body>
</html>