@extends('errors::minimal')

@section('title', __('Pagina no encontrada'))

@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>

    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 text-center">
        <h1 class="text-9xl font-bold text-red-500">404</h1>
        <p class="text-xl text-gray-700 mt-2">¡Oops! No encontramos esta página.</p>

        <!-- GIF aleatorio de Giphy -->
        <img id="gif" class="w-80 h-80 rounded-lg shadow-lg mt-5" alt="Página no encontrada">

        <a href="{{ url('/book') }}" class="mt-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"> 🏠 Volver al inicio</a>


    </div>

    <script>
        // Obtener un GIF aleatorio de Giphy
        fetch('https://api.giphy.com/v1/gifs/random?api_key=mqPEj4wUgjBwFINFywA71Jm2Ud1BimIk&tag=cry&rating=g')
            .then(response => response.json())
            .then(data => {
                document.getElementById('gif').src = data.data.images.original.url;
            })
            .catch(error => {
                console.error('Error al cargar el GIF:', error);
                document.getElementById('gif').src = "https://media.giphy.com/media/3o7abldj0b3rxrZUxW/giphy.gif"; // Backup GIF
            });
    </script>
@show


{{--

@section('code', '404')
@section('message', __('Esta página no ha sido encontrada, lo sentimos mucho :)'))

--}}
