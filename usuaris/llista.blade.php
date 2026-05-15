<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Llista d\'Usuaris') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
 
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif
 
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <a href="{{ route('usuaris.create') }}"
                   class="inline-block bg-blue-600 text-white px-4 py-2 rounded mb-4">
                   + Nou usuari
                </a>
 
                <table class="min-w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border px-4 py-2">ID</th>
                            <th class="border px-4 py-2">Nom</th>
                            <th class="border px-4 py-2">Correu</th>
                            <th class="border px-4 py-2">Accions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dades_usuaris as $usuari)
                            <tr>
                                <td class="border px-4 py-2">{{ $usuari->id }}</td>
                                <td class="border px-4 py-2">{{ $usuari->nom }}</td>
                                <td class="border px-4 py-2">{{ $usuari->correu }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('usuaris.show', $usuari->id) }}"
                                       class="bg-blue-500 text-white px-2 py-1 rounded text-sm">Mostra</a>

                                    <a href="{{ route('usuaris.edit', $usuari->id) }}"
                                       class="bg-yellow-500 text-white px-2 py-1 rounded text-sm">Edita</a>

                                    <form action="{{ route('usuaris.destroy', $usuari->id) }}"
                                          method="POST" style="display:inline-block">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="bg-red-500 text-white px-2 py-1 rounded text-sm"
                                                onclick="return confirm('Vols esborrar aquest usuari?')">
                                            Esborra
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
 
                <div class="mt-4">
                    <a href="{{ url('/dashboard') }}" class="text-blue-600 hover:underline">
                        ← Torna al dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
