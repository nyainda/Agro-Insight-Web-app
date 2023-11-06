<x-guest-layout title="Forgot password">
    <x-authentication-card>
        <x-slot name="logo">
            <div class="flex flex-col items-center ">
                <a href="#" class="flex items-center mb-4 text-2xl font-semibold text-gray-900 dark:text-white">
                    <div class="flex mb-1 items-center">
                        <x-authentication-card-logo class="block h-10 w-auto mx-2" />
                        <span class="text-blue-700 mx-2 uppercase font-serif">Agro-Insight</span>
                    </div>
                </a>
                <div>
        </x-slot>


        <h1 class="text-2xl font-bold leading-tight tracking-tight text-gray-900 md:text-3xl dark:text-white mb-6">
            Forgot Password?
        </h1>

        <div class="mb-6 text-sm text-gray-900">
            Enter your email and we'll send you instructions to reset your password.
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif



        <form method="POST" action="{{ route('password.email') }} ">
            @csrf

            <div class="mb-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" placeholder="admin@gmail.com"  name="email" :value="old('email')" required autofocus autocomplete="username" />
                <ul class="mt-3 text-sm text-red-500 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="mb-4 flex justify-center">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>

        <div class="flex items-center justify-center mt-4">

            <a class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500" href="{{ route('login') }}">
                {{ __('Back to Login') }}
            </a>
        </div>
    </x-authentication-card>
</x-guest-layout>
