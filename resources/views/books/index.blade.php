<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Libros Disponibles') }}
        </h2>

        @if (session('msg'))
            @if (session('msg') == 'insertbooksuccess')
            <x-alert type="success" message="Libro insertado con éxito" />

            @endif
            @if (session('msg') == 'insertbookerror')
            <x-alert type="error" message="¡Ha ocurrido un error al insertar el componente!" />

            @endif
        @endif
        @if (session('adminerror'))
        <x-alert type="error" message="No puedes acceder a esta ruta si no eres administrador" />
            @endif
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @livewire('book-search')
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

                        @foreach ($otherbooks as $book)
                            @foreach ($users as $user)
                                @if ($user->id == $book->user_id)
                                    <!--
                                    <a href=""
                                        class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $book->title }}</h5>
                                        <p class="font-normal text-gray-700 dark:text-gray-400">Autor:
                                            {{ $book->author }}</p>
                                        <p class="font-normal text-gray-700 dark:text-gray-400">Usuario:
                                            {{ $user->name }}</p>
                                    </a>


                                    <div
                                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                                        <a href="{{ url('book/' . $book->id) }}">
                                            <img class="rounded-t-lg" src="{{ $book->pic }}"
                                                alt="Libro: {{ $book->title }}" />
                                        </a>
                                        <div class="p-5">
                                            <a href="#">
                                                <h5
                                                    class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                    {{ $book->title }}</h5>
                                            </a>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Autor:
                                                {{ $book->author }}</p>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Usuario:
                                                {{ $user->name }}</p>
                                            <a href="{{ url('book/' . $book->id) }}"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Read more
                                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>





                                    ESTE ES EL BUENO, PERO TENGO EL LIVEWIRE





                                    <a href="{{ url('book/' . $book->id) }}"
                                        class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                                            src="{{ $book->pic }}" alt="Foto del libro {{ $book->title }}">
                                        <div class="flex flex-col justify-between p-4 leading-normal">
                                            <h5
                                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                {{ $book->title }}</h5>
                                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Autor: {{ $book->author }}</p>
                                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Usuario: {{ $user->name }}</p>
                                        </div>
                                    </a>
@endif
@endforeach
@endforeach


                                -->
                    </div>

                </div>
            </div>
        </div>

    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll("[data-dismiss-target]").forEach((button) => {
                button.addEventListener("click", function() {
                    const target = document.querySelector(this.getAttribute("data-dismiss-target"));
                    if (target) {
                        target.style.display = "none";
                        location.reload();
                    }
                });
            });
        });
    </script>
</x-app-layout>
