<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Error de connexió - {{ config('app.name', 'Escola') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="public-page font-sans antialiased">
    <main class="public-wrap">

        <section class="public-panel">
            <header class="text-center">
                <a href="{{ url('/') }}" class="inline-flex justify-center">
                    <x-application-logo style="width:150px; display:block; margin:0 auto;" />
                </a>
            </header>

            <div class="mt-6 rounded-lg border border-rose-300 bg-rose-50 p-5 text-rose-800">
                <h1>Error de connexió amb la base de dades</h1>
                <p>L'aplicació no ha pogut connectar-se al servidor MySQL.
                   Si us plau, contacta amb l'administrador del sistema.</p>

                @if (isset($missatge))
                    <p><b>Detall tècnic:</b> {{ $missatge }}</p>
                @endif
            </div>

            <p class="mt-10">
                <a href="{{ url('/') }}">← Tornar a l'inici</a>
            </p>
        </section>

    </main>
</body>
</html>
