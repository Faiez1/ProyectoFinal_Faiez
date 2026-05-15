<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informació - {{ config('app.name', 'Escola') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="info-page font-sans antialiased">

    <div class="info-wrap">
        <header class="info-header">
            <a href="{{ url('/') }}" class="info-logo-link">
                <x-application-logo />
            </a>

            <h1>{{ config('app.name', 'Escola') }}</h1>
            <p>
                Aplicació web per a la gestió d'una escola de cicles formatius
            </p>
        </header>

        <main class="info-panel">

            <h2>Informació de l'aplicació</h2>

            <p>
                Aquesta aplicació permet gestionar les dades internes d'una escola de cicles formatius.
                L'objectiu principal és facilitar el manteniment de la informació dels cicles disponibles
                i dels usuaris autoritzats per accedir al sistema.
            </p>

            <h3>Funcionalitats principals</h3>

            <ul>
                <li>
                    <strong>Gestió de cicles formatius:</strong>
                    permet crear, consultar, modificar i eliminar cicles formatius.
                </li>
                <li>
                    <strong>Gestió d'usuaris:</strong>
                    permet crear, consultar, modificar i eliminar usuaris autoritzats de l'aplicació.
                </li>
                <li>
                    <strong>Autenticació d'usuaris:</strong>
                    només els usuaris validats poden accedir al dashboard i a les opcions de gestió.
                </li>
                <li>
                    <strong>Control d'accés:</strong>
                    els usuaris no autenticats només poden accedir a la pàgina d'inici, la pàgina d'informació i el formulari de login.
                </li>
                <li>
                    <strong>Gestió d'errors:</strong>
                    si hi ha un problema de connexió amb la base de dades, es mostra una pàgina informativa.
                </li>
            </ul>

            <h3>Com iniciar sessió</h3>

            <p>
                Per accedir a l'aplicació, torna a la pàgina d'inici i fes clic a
                <strong>Log in</strong>. Hauràs d'introduir el teu correu electrònic i la teva contrasenya.
                Si les credencials són correctes, entraràs al dashboard principal.
            </p>

            <h3>Accés d'usuaris</h3>

            <p>
                L'accés a l'aplicació està restringit als usuaris autoritzats.
                Les credencials són personals i no s'han de compartir ni publicar.
            </p>

            <h3>Com sortir de l'aplicació</h3>

            <p>
                Un cop dins del dashboard, pots sortir de la sessió fent clic sobre el nom de l'usuari
                situat a la part superior dreta i seleccionant l'opció <strong>Log Out</strong>.
            </p>

            <h3>Permisos dels usuaris</h3>

            <p>
                Tots els usuaris autenticats tenen els mateixos permisos. No hi ha diferència entre
                usuaris administradors i usuaris bàsics. Qualsevol usuari validat pot gestionar tant
                els cicles formatius com els usuaris de l'aplicació.
            </p>

            <h3>Accés a les parts de l'aplicació</h3>

            <ul>
                <li>Els usuaris no autenticats poden veure la pàgina d'inici.</li>
                <li>Els usuaris no autenticats poden consultar aquesta pàgina d'informació.</li>
                <li>Els usuaris no autenticats poden accedir al formulari de login.</li>
                <li>Els usuaris autenticats poden accedir al dashboard.</li>
                <li>Des del dashboard es pot accedir a la gestió de cicles i a la gestió d'usuaris.</li>
            </ul>

            <h3>Gestió de cicles formatius</h3>

            <p>
                La secció de cicles permet mantenir la informació dels cicles formatius de l'escola.
                Des d'aquesta secció es poden afegir nous cicles, consultar la llista resumida,
                veure el detall d'un cicle concret, modificar-ne les dades o eliminar-lo.
            </p>

            <h3>Gestió d'usuaris</h3>

            <p>
                La secció d'usuaris permet mantenir els comptes autoritzats per accedir a l'aplicació.
                Les contrasenyes s'emmagatzemen de manera segura mitjançant un sistema de hash.
            </p>

            <div class="info-actions">
                <a href="{{ url('/') }}" class="info-button info-button-secondary">
                    ← Tornar a l'inici
                </a>

                @auth
                    <a href="{{ url('/dashboard') }}" class="info-button info-button-primary">
                        Anar al dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="info-button info-button-primary">
                        Log in
                    </a>
                @endauth
            </div>

        </main>
    </div>

</body>
</html>
