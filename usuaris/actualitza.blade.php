<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Usuari') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
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
 
                <form action="{{ route('usuaris.update', $dades_usuari->id) }}" method="POST">
                    @csrf
                    @method('PUT')
 
                    <div class="mb-4">
                        <label class="block">Nom (màx. 10 caràcters):</label>
                        <input type="text" name="nom"
                               value="{{ old('nom', $dades_usuari->nom) }}"
                               maxlength="10" class="w-full border rounded p-2" required>
                    </div>
 
                    <div class="mb-4">
                        <label class="block">Correu:</label>
                        <input type="email" name="correu"
                               value="{{ old('correu', $dades_usuari->correu) }}"
                               maxlength="100" class="w-full border rounded p-2" required>
                    </div>
 
                    <div class="mb-4">
                        <label class="block">Nova contrasenya (deixa-ho buit per no canviar-la):</label>
                        <input type="password" name="contrasenya"
                               class="w-full border rounded p-2">
                    </div>
 
                    <div class="mb-4">
                        <label class="block">Confirmar nova contrasenya:</label>
                        <input type="password" name="contrasenya_confirmation"
                               class="w-full border rounded p-2">
                    </div>
 
                    <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded">Actualitzar</button>
                    <a href="{{ route('usuaris.index') }}" class="ml-4">Cancel·lar</a>
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
