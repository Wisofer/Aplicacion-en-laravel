<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Imagen</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        .card {
            max-width: 400px;
            margin: 40px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            
            
        }

        button[type="submit"]:hover {
            background-color: #3e8e41;
           
        }
    </style>
</head>

<body>
    @extends('Layouts.app')
    @section('contenido')
    <br>
    {{-- <nav class="bg-orange-500 h-12 flex justify-center items-center">
        <ul class="flex justify-center items-center">
          <li class="mr-4">
            <a href="#" class="text-lg font-bold text-white hover:text-orange-700">Inicio</a>
          </li>
          <li class="mr-4">
            <a href="#" class="text-lg font-bold text-white hover:text-yellow-700">Servicios</a>
          </li>
          <li class="mr-4">
            <a href="#" class="text-lg font-bold text-white hover:text-green-700">Sobre nosotros</a>
          </li>
          <li class="mr-4">
            <a href="#" class="text-lg font-bold text-white hover:text-purple-700">Contacto</a>
          </li>
        </ul>
      </nav> --}}
    <div class="card rounded">
        <form>
          <div class="form-group">
            <label for="url" class="text-white">URL:</label>
            <input type="url" id="url" name="url" class="form-control rounded" placeholder="Ingrese la URL" />
          </div>
          <div class="form-group">
            <label for="nombre" class="text-white">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control rounded" placeholder="Ingrese su nombre" />
          </div>
          <div class="form-group">
            <label for="comentario" class="text-white">Comentario:</label>
            <textarea id="comentario" name="comentario" class="form-control rounded"  placeholder="Ingrese su comentario"></textarea>
          </div>
          <button type="submit" class="btn btn-primary rounded">Enviar</button>
        </form>
      </div>
</body>
@endsection
</html>
