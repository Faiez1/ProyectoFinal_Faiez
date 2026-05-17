<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Escola') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="public-page font-sans antialiased">
    <main class="public-wrap">

        <section class="public-hero">
            <x-application-logo style="width:150px; display:block; margin:0 auto;" />
            <h1 class="public-title">{{ config('app.name', 'Escola') }}</h1>
            <p class="public-subtitle">Aplicació per a la gestió d'una escola de cicles formatius</p>

            <div class="public-actions">
                <a href="{{ url('/info') }}">Informació de l'aplicació</a>

                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">Accedir al Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Validar-se</a>
                    @endauth
                @endif
            </div>
        </section>

    </main>
</body>
</html>
