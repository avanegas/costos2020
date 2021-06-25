<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <div class="w-full sm:max-w-lg bg-gradient-to-r px-24 from-gray-300 via-gray-200 to-gray-100 shadow-md rounded-lg">
                <a href="/" class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-20 w-auto" src="{{asset('img/costos_color_op.svg')}}" alt="Costos">
                    <img class="hidden lg:block h-20 w-auto" src="{{asset('img/costos_color_op.svg')}}" alt="Costos">
                </a>
                <p>Deseo <b>REGISTRARME</b>, soy <i><small>decente</small></i> <b>:)</b></p>
            </div>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
