<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Show del libro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <div class="flex items-start gap-4 mt-4">
                        <!-- Tarjeta del libro -->
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                            <img class="rounded-t-lg" src="{{ asset('storage/' . $book->pic) }}" alt="{{ $book->title }}" />
                            <div class="p-5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $book->title }}</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Autor: {{ $book->author }}</p>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Editorial: {{ $book->publisher }}</p>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">ISBN: {{ $book->isbn }}</p>
                                <form action="{{ route('cambiar', ['book' => $book->id]) }}" method="POST" class="inline-flex">
                                    @csrf
                                    <button type="submit"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Solicitar Intercambio
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!-- Formulario de selección -->
                        @if (isset($misLibros))
                        @if (count($misLibros) == 0)
                            <p>No tienes ningun libro subido todavía, sube uno!</p>
                            @else
                            <form class="flex flex-col gap-2" action="{{ route('deals.store') }}" method="POST">
                                @csrf
                                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                                    {{ __('Selecciona un libro para intercambiar') }}
                                </h2>
                                <select id="book1_id" name="book1_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach ($misLibros as $libro)
                                        <option value="{{ $libro->id }}">{{ $libro->title }}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="user1_id" value="{{ auth()->id() }}">
                                <input type="hidden" name="book2_id" value="{{ $book->id }}">
                                <input type="hidden" name="user2_id" value="{{ $book->user_id }}">

                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Solicitar Intercambio
                                </button>
                            </form>
                        @endif

                        @endif
                    </div>






                </div>
            </div>
        </div>
    </div>
</x-app-layout>
