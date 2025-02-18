<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Libros Disponibles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @foreach ($otherbooks as $book)
                        @foreach ($users as $user )
                            @if ($user->id == $book->user_id)
                            <a href="" class="w-full p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $book->title }}</h5>
                                <p class="font-normal text-gray-700 dark:text-gray-400">Autor: {{ $book->author }}</p>
                                <p class="font-normal text-gray-700 dark:text-gray-400">Usuario: {{ $user->name }}</p>
                            </a>
                            @endif
                        @endforeach

                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
