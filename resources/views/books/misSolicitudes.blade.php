
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Mis Solicitudes') }}
        </h2>
        @if (session('success'))
        <x-alert type="success" message="{{session('success')}}" />
            @endif
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <ul>
                        @foreach ($deals as $deal)
                            <li>
                                <strong>{{ $deal->user1->name }}</strong> quiere intercambiar:
                                 📚 <strong>{{ $deal->book1->title }}</strong> (de él) 🔄 por 📚 <strong>{{ $deal->book2->title }}</strong> (tuyo)

                                <form action="{{ route('deals.update', $deal->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="accepted">
                                    <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Aceptar</button>

                                </form>

                                <form action="{{ route('deals.update', $deal->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="rejected">
                                    <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Rechazar</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                    @if (count($deals) == 0)
                        No hay tratos pendientes
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
