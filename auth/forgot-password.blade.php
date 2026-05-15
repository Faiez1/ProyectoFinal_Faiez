<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Has oblidat la contrasenya? Escriu el correu del teu usuari i rebras un enllac per restablir-la.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="correu" :value="__('Correu')" />
            <x-text-input id="correu" class="block mt-1 w-full" type="email" name="correu" :value="old('correu')" required autofocus />
            <x-input-error :messages="$errors->get('correu')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Enviar enllac') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
