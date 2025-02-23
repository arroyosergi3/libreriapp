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


                    <!-- tarjeta del libro clicado -->
                    <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <img class="rounded-t-lg" src="{{ asset('storage/' . $book->pic) }}" alt="{{ $book->title }}" />

                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $book->title }}</h5>

                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Autor: {{ $book->author }}</p>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Editorial:
                                {{ $book->publisher }}</p>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">ISBN: {{ $book->isbn }}</p>

                            <form action="{{ route('cambiar', ['book' => $book->id]) }}" method="POST" class="inline-flex">
                                @csrf
                                <button type="submit"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Solicitar Intercambio
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </button>
                            </form>

                        </div>
                    </div>

                    @if (isset($misLibros))
                    <form class="max-w-sm mx-auto">
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccciona el libro a intercambiar</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">



                      @foreach ($misLibros as $libro)

                      <option value="{{ $libro->id }}">{{ $libro->title }}</option>
                      @endforeach
                    </select>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Solicitar Intercambio</button>

                </form>
                    @endif






                </div>
            </div>
        </div>
    </div>
</x-app-layout>
