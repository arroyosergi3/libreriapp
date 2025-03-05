@extends('errors::minimal')

@section('title', __('Servicio no disponible'))

@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>

    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 text-center">
        <h1 class="text-9xl font-bold text-red-500">503</h1>
        <p class="text-xl text-gray-700 mt-2">¡Oops! Este servicio no esta disponible.</p>

        <!-- GIF aleatorio de Giphy -->
        <img id="gif" class="w-80 h-80 rounded-lg shadow-lg mt-5" alt="Servicio no disponible">



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
