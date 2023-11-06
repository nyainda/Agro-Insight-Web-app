<x-guest-layout title="confirm-password">
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

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
