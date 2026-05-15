<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detall de l\'Usuari') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
 
                <table class="min-w-full border-collapse border border-gray-300">
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2 font-bold bg-gray-100">ID</td>
                            <td class="border px-4 py-2">{{ $dades_usuari->id }}</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 font-bold bg-gray-100">Nom</td>
                            <td class="border px-4 py-2">{{ $dades_usuari->nom }}</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 font-bold bg-gray-100">Correu</td>
                            <td class="border px-4 py-2">{{ $dades_usuari->correu }}</td>
                        </tr>
                    </tbody>
                </table>
 
                <div class="detail-actions">
                    <a href="{{ route('usuaris.edit', $dades_usuari->id) }}"
                       class="detail-action detail-action-edit bg-yellow-500 text-white px-3 py-2 rounded">Edita</a>

                    <a href="{{ route('usuaris.index') }}"
                       class="detail-action detail-action-list bg-gray-500 text-white px-3 py-2 rounded">Torna a la llista</a>

                    <a href="{{ url('/dashboard') }}"
                       class="detail-action detail-action-dashboard bg-blue-600 text-white px-3 py-2 rounded">Torna al dashboard</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
