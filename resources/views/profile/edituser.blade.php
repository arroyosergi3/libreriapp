<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>


    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.updateUser', ['user' => $user->id]) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" name="name" type="text" class="block w-full mt-1" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="address" :value="__('Direccion')" />
            <x-text-input id="address" name="address" type="text" class="block w-full mt-1" :value="old('address', $user->address)" required autofocus autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>


        <div>
            <x-input-label for="rol" :value="__('Rol')" />
            <select id="role" name="rol" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                <option value="user" {{ old('rol', $user->rol) == 'user' ? 'selected' : '' }}>{{ __('User') }}</option>
                <option value="admin" {{ old('rol', $user->rol) == 'admin' ? 'selected' : '' }}>{{ __('Admin') }}</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('rol')" />
        </div>



        <div>
            <x-input-label for="email" :value="__('Correo')" />
            <x-text-input id="email" name="email" type="email" class="block w-full mt-1" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />


        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

