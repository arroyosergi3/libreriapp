<div>
    {{-- The whole world belongs to you. --}}
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative mb-4">
        <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input wire:model.live='buscador' type="search" id="default-search" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Busca por títulos, autores..." required />
    </div>

    @if($books->count())
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
            @foreach ($books as $book)
                @foreach ($users as $user)
                    @if ($user->id == $book->user_id)
                        <a href="{{ url('book/' . $book->id) }}"
                            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

                            <!-- Imagen con altura ajustada y misma longitud -->
                            <img class="object-cover w-full h-64 md:h-56 md:w-48 md:rounded-lg"
                                 src="{{ asset('storage/' . $book->pic) }}" alt="Foto del libro {{ $book->title }}">

                            <!-- Información de la tarjeta -->
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $book->title }}
                                </h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Autor: {{ $book->author }}</p>
                                <!-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Editorial: {{ $book->publisher }}</p> -->
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Usuario: {{ $user->name }}</p>
                            </div>
                        </a>
                    @endif
                @endforeach
            @endforeach
        @endif
    </div>
</div>
