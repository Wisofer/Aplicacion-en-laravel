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

    
@section('contenido')
@extends('Persona.navbar')
<h4>
   
    {{ $nombre }} <br>
    {{ $apellido }} <br>
    {{ $edad }} 

</h4>
@endsection
    
</body>
</html>