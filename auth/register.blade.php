<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
 
        <!-- Nom -->
        <div>
            <x-input-label for="nom" :value="__('Nom (màxim 10 caràcters)')" />
            <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="name" maxlength="10" />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>
 
        <!-- Correu -->
        <div class="mt-4">
            <x-input-label for="correu" :value="__('Correu')" />
            <x-text-input id="correu" class="block mt-1 w-full" type="email" name="correu" :value="old('correu')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('correu')" class="mt-2" />
        </div>
 
        <!-- Contrasenya -->
        <div class="mt-4">
            <x-input-label for="contrasenya" :value="__('Contrasenya')" />
            <x-text-input id="contrasenya" class="block mt-1 w-full"
                            type="password"
                            name="contrasenya"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('contrasenya')" class="mt-2" />
        </div>
 
        <!-- Confirmació de Contrasenya -->
        <div class="mt-4">
            <x-input-label for="contrasenya_confirmation" :value="__('Confirmar contrasenya')" />
            <x-text-input id="contrasenya_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="contrasenya_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('contrasenya_confirmation')" class="mt-2" />
        </div>
 
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
 
        <div class="p-6 bg-white border-b border-gray-200">
            <a href="{{ url('dashboard') }}">Torna al dashboard</a>
        </div>
    </form>
</x-guest-layout>
