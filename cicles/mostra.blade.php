<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detall del Cicle') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
 
                <table class="min-w-full border-collapse border border-gray-300">
                    <tbody>
                        <tr><td class="border px-4 py-2 font-bold bg-gray-100">ID</td>
                            <td class="border px-4 py-2">{{ $dades_cicle->id }}</td></tr>
                        <tr><td class="border px-4 py-2 font-bold bg-gray-100">Codi</td>
                            <td class="border px-4 py-2">{{ $dades_cicle->codi }}</td></tr>
                        <tr><td class="border px-4 py-2 font-bold bg-gray-100">Nom</td>
                            <td class="border px-4 py-2">{{ $dades_cicle->nom }}</td></tr>
                        <tr><td class="border px-4 py-2 font-bold bg-gray-100">Família</td>
                            <td class="border px-4 py-2">{{ $dades_cicle->familia_professional }}</td></tr>
                        <tr><td class="border px-4 py-2 font-bold bg-gray-100">Grau</td>
                            <td class="border px-4 py-2">{{ $dades_cicle->grau }}</td></tr>
                        <tr><td class="border px-4 py-2 font-bold bg-gray-100">Hores totals</td>
                            <td class="border px-4 py-2">{{ $dades_cicle->hores_totals }}</td></tr>
                        <tr><td class="border px-4 py-2 font-bold bg-gray-100">Durada (anys)</td>
                            <td class="border px-4 py-2">{{ $dades_cicle->durada_anys }}</td></tr>
                        <tr><td class="border px-4 py-2 font-bold bg-gray-100">Titulació</td>
                            <td class="border px-4 py-2">{{ $dades_cicle->titulacio_obtinguda }}</td></tr>
                        <tr><td class="border px-4 py-2 font-bold bg-gray-100">Accés requerit</td>
                            <td class="border px-4 py-2">{{ $dades_cicle->acces_requerit }}</td></tr>
                        <tr><td class="border px-4 py-2 font-bold bg-gray-100">Places disponibles</td>
                            <td class="border px-4 py-2">{{ $dades_cicle->places_disponibles }}</td></tr>
                    </tbody>
                </table>
 
                <div class="detail-actions">
                    <a href="{{ route('cicles.edit', $dades_cicle->id) }}"
                       class="detail-action detail-action-edit bg-yellow-500 text-white px-3 py-2 rounded">Edita</a>
                    <a href="{{ route('cicles.index') }}"
                       class="detail-action detail-action-list bg-gray-500 text-white px-3 py-2 rounded">Torna a la llista</a>
                    <a href="{{ url('/dashboard') }}"
                       class="detail-action detail-action-dashboard bg-blue-600 text-white px-3 py-2 rounded">Torna al dashboard</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
