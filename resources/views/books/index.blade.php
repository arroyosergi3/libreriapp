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
