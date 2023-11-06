<x-guest-layout title="Verfiy Email">
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

        <div class="mt-1 mb-3 text-center text-xl font-bold leading-5 tracking-tight dark:text-white">
            <span class="text-blue-700">Email Verification</span>
</div>

        <div class="prose mb-4 text-sm font-medium text-gray-700">
            {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>
<!--
            <div>
                <a
                  {{--  href="{{ route('profile.show') }}"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    {{ __('Edit Profile') }}</a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-2">
                        {{ __('Log Out') }}--}}
                    </button>
                </form>
            </div>
        </div>
    -->
    </x-authentication-card>
</x-guest-layout>
