<x-guest-layout>
    <div class="mb-4 text-sm text-red-700">
        No s'ha pogut validar l'usuari. Revisa el correu i la contrasenya.
    </div>

    <div class="flex items-center justify-between mt-4">
        <a href="{{ url('/') }}">{{ __('Tornar a l\'inici') }}</a>
        <a href="{{ route('login') }}">{{ __('Tornar al login') }}</a>
    </div>
</x-guest-layout>
