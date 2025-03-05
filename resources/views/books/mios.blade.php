<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Mis Libros') }}
        </h2>
        @if (session('bookdeleted'))

        <x-alert type="success" message="Libro eliminado con éxito" />
        @endif
        @if (session('updateBook'))
        <x-alert type="success" message="Libro actualizado con éxito" />
        @endif

    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
                        @foreach ($mybooks as $book)
                            <a
                               class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <!-- Ajusta la altura de la imagen -->
                                <img class="object-cover w-full h-64 md:h-56 md:w-48 md:rounded-lg"
                                     src="{{ asset('storage/' . $book->pic) }}" alt="Foto del libro {{ $book->title }}">

                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5
                                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $book->title }}</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Autor: {{ $book->author }}</p>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Usuario: {{ $user->name }}</p>
                                    <form action="{{ route('book.edit', $book)}}" method="get">

                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Editar Libro</button>

                                    </form>
                                    <form action="{{ route('book.destroy', $book)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Borrar Libro</button>

                                    </form>

                                </div>
                            </a>
                        @endforeach
                    </div>
                    @if (count($mybooks) == 0)
                    No has subido ningún libro todavía!
                @endif
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
