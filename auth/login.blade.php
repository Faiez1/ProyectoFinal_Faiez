<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
 
    <form method="POST" action="{{ route('login') }}">
        @csrf
 
        <!-- Correu -->
        <div>
            <x-input-label for="correu" :value="__('Correu')" />
            <x-text-input id="correu" class="block mt-1 w-full" type="email" name="correu" :value="old('correu')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('correu')" class="mt-2" />
        </div>
 
        <!-- Contrasenya -->
        <div class="mt-4">
            <x-input-label for="contrasenya" :value="__('Contrasenya')" />
            <x-text-input id="contrasenya" class="block mt-1 w-full"
                            type="password"
                            name="contrasenya"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('contrasenya')" class="mt-2" />
        </div>
 
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3">
                {{ __('Validar-se') }}
            </x-primary-button>
        </div>
 
        <div class="mt-4">
            <a href="{{ url('/') }}">{{ __('Tornar a l\'inici') }}</a>
        </div>
    </form>
</x-guest-layout>
