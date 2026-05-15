<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard de l\'aplicació') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">
 
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                    {{ session('error') }}
                </div>
            @endif
 
            <!-- Bloc Cicles -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="font-bold text-lg mb-2">Gestió de Cicles</h3>

                    <a href="{{ route('cicles.index') }}" class="text-blue-600 hover:underline">
                        Veure llista de cicles
                    </a>
                    <br>

                    <a href="{{ route('cicles.create') }}" class="text-blue-600 hover:underline">
                        Crea un nou cicle
                    </a>
                </div>
            </div>
 
            <!-- Bloc Usuaris -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="font-bold text-lg mb-2">Gestió d'Usuaris</h3>

                    <a href="{{ route('usuaris.index') }}" class="text-blue-600 hover:underline">
                        Veure llista d'usuaris
                    </a>
                    <br>

                    <a href="{{ route('usuaris.create') }}" class="text-blue-600 hover:underline">
                        Crea un nou usuari
                    </a>
                </div>
            </div>
 
        </div>
    </div>
</x-app-layout>
