<x-guest-layout>
    <x-jet-authentication-card>


        <x-jet-validation-errors class="mb-4 " />


        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <x-slot name="logo" >
        </x-slot>
        <form method="POST" class="bg-blue-100 font-bold" action="{{ route('login') }}">

            <div  style="width: 100%;height:auto;display:grid;place-items:center;">
                <img class="mt-4" src="image/books.png" style="width:6rem;" alt="" srcset="">
            </div>

            @csrf
            <div class="bg-blue-100 p-2">
                <x-jet-label for="email" style="font-size: 18px;" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full bg-blue-200" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4 bg-blue-100 p-2">
                <x-jet-label for="password" style="font-size: 18px;" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full bg-blue-200" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-end bg-blue-100">

                @if (Route::has('register'))
                    <a class="underline text-sm text-black hover:text-blue-900" href="{{ route('register') }}">
                        {{ __('Registrarse') }}
                    </a>
                @endif

                <x-jet-button class="m-2 bg-blue-600">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
