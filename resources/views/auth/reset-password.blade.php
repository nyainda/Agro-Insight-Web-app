<x-guest-layout title="reset-password">
    <x-authentication-card>
        <x-slot name="logo">
            <div class="flex flex-col items-center ">
                <a href="#" class="flex items-center mb-4 text-2xl font-semibold text-gray-900 dark:text-white">
                    <div class="flex mb-1 items-center">
                        <x-authentication-card-logo class="block h-10 w-auto mx-2" />
                        <span class="text-blue-700 mx-2 uppercase font-serif">Agro-Insight</span>
                    </div>
                </a>
            </div>
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-label for="email" value="{{ __('E-Mail Address') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />

            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
