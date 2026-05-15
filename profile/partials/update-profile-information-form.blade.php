<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Informació del perfil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Actualitza el nom i el correu del teu usuari.") }}
        </p>
    </header>

    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>
    @endif

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="nom" :value="__('Nom')" />
            <x-text-input id="nom" name="nom" type="text" class="mt-1 block w-full" :value="old('nom', $user->nom)" required autofocus autocomplete="name" maxlength="10" />
            <x-input-error class="mt-2" :messages="$errors->get('nom')" />
        </div>

        <div>
            <x-input-label for="correu" :value="__('Correu')" />
            <x-text-input id="correu" name="correu" type="email" class="mt-1 block w-full" :value="old('correu', $user->correu)" required autocomplete="username" maxlength="100" />
            <x-input-error class="mt-2" :messages="$errors->get('correu')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Desar') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Desat.') }}</p>
            @endif
        </div>
    </form>
</section>
