<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Cicle') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
 
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
 
                <form action="{{ route('cicles.update', $dades_cicle->id) }}" method="POST">
                    @csrf
                    @method('PUT')
 
                    <div class="mb-4">
                        <label class="block">Codi:</label>
                        <input type="text" name="codi"
                               value="{{ old('codi', $dades_cicle->codi) }}"
                               maxlength="20" class="w-full border rounded p-2" required>
                    </div>
 
                    <div class="mb-4">
                        <label class="block">Nom:</label>
                        <input type="text" name="nom"
                               value="{{ old('nom', $dades_cicle->nom) }}"
                               maxlength="150" class="w-full border rounded p-2" required>
                    </div>
 
                    <div class="mb-4">
                        <label class="block">Família professional:</label>
                        <input type="text" name="familia_professional"
                               value="{{ old('familia_professional', $dades_cicle->familia_professional) }}"
                               maxlength="100" class="w-full border rounded p-2" required>
                    </div>
 
                    <div class="mb-4">
                        <label class="block">Grau:</label>
                        <select name="grau" class="w-full border rounded p-2" required>
                            @php $g = old('grau', $dades_cicle->grau); @endphp
                            <option value="Bàsic" {{ $g == 'Bàsic' ? 'selected' : '' }}>Bàsic</option>
                            <option value="Mitjà" {{ $g == 'Mitjà' ? 'selected' : '' }}>Mitjà</option>
                            <option value="Superior" {{ $g == 'Superior' ? 'selected' : '' }}>Superior</option>
                        </select>
                    </div>
 
                    <div class="mb-4">
                        <label class="block">Hores totals:</label>
                        <input type="number" name="hores_totals"
                               value="{{ old('hores_totals', $dades_cicle->hores_totals) }}"
                               min="0" class="w-full border rounded p-2" required>
                    </div>
 
                    <div class="mb-4">
                        <label class="block">Durada (anys):</label>
                        <input type="number" name="durada_anys"
                               value="{{ old('durada_anys', $dades_cicle->durada_anys) }}"
                               min="1" max="2" class="w-full border rounded p-2" required>
                    </div>
 
                    <div class="mb-4">
                        <label class="block">Titulació obtinguda:</label>
                        <input type="text" name="titulacio_obtinguda"
                               value="{{ old('titulacio_obtinguda', $dades_cicle->titulacio_obtinguda) }}"
                               maxlength="200" class="w-full border rounded p-2" required>
                    </div>
 
                    <div class="mb-4">
                        <label class="block">Accés requerit:</label>
                        <input type="text" name="acces_requerit"
                               value="{{ old('acces_requerit', $dades_cicle->acces_requerit) }}"
                               maxlength="200" class="w-full border rounded p-2" required>
                    </div>
 
                    <div class="mb-4">
                        <label class="block">Places disponibles:</label>
                        <input type="number" name="places_disponibles"
                               value="{{ old('places_disponibles', $dades_cicle->places_disponibles) }}"
                               min="0" class="w-full border rounded p-2" required>
                    </div>
 
                    <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded">Actualitzar</button>
                    <a href="{{ route('cicles.index') }}" class="ml-4">Cancel·lar</a>
                </form>
 
                <div class="mt-4">
                    <a href="{{ url('/dashboard') }}" class="text-blue-600 hover:underline">
                        ← Torna al dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
