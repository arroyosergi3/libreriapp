<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        @if (session('deleteerror'))
        <x-alert type="error" message="Ha habido un error al eliminar el usuario" />
    @endif
    @if (session('deleteok'))
        <x-alert type="success" message="Usuario eliminado con exito" />
    @endif
    @if (session('updateUserOk'))
    <x-alert type="success" message="Usuario actualizado con exito" />
@endif
</x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Administración de usuarios</h1>
                    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Direccion
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Rol
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Operaciones
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr
                                    class="bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $user->name }}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->email }}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->address }}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->rol }}

                                    </td>
                                    <td class="px-6 py-4">

                                        <a href="{{ route('editUser', ['user' => $user]) }}"> <button type="button"
                                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Editar</button></a>
                                        <form action="{{ route('deleteUser', ['user' => $user->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Borrar</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
