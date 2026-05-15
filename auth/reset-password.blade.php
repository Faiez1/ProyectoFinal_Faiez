<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="correu" :value="__('Correu')" />
            <x-text-input id="correu" class="block mt-1 w-full" type="email" name="correu" :value="old('correu', $request->correu)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('correu')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="contrasenya" :value="__('Contrasenya')" />
            <x-text-input id="contrasenya" class="block mt-1 w-full" type="password" name="contrasenya" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('contrasenya')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="contrasenya_confirmation" :value="__('Confirmar contrasenya')" />

            <x-text-input id="contrasenya_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="contrasenya_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('contrasenya_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Restablir contrasenya') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
