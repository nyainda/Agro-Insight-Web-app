<x-guest-layout >

<section class="">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <div class="flex mb-4 items-center">
                <x-authentication-card-logo class="block h-10 w-auto mx-2" />
                <span class="text-blue-700 mx-2 uppercase font-serif">Agro-Insight</span>
            </div>
          </a>

      <div class="w-full bg-gray-300 rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <div class="mt-1 text-center text-xl font-bold leading-5 tracking-tight dark:text-white">
                <span class="text-gray-700">Create Account</span>
</div>

          <form method="POST" action="{{ route('register') }}" class="space-y-4 md:space-y-6">
            @csrf


            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input
                    type="text"
                    name="name"
                    :value="old('name')"
                    required
                    autofocus
                    autocomplete="name"
                    class="bg-gray-50 border  text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') border-red-500 @enderror"
                />
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Email address
                </label>
                <div class="mt-1">
                    <input
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        class="bg-gray-50 border  text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('email') border-red-500 @enderror"
                    />
                    @error('email')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>


            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="password" placeholder="••••••••" name="password" required autocomplete="new-password" />
                @error('password')
                    <p class="text-red-500 text-sm">
                        @if ($message == 'The password must be at least 8 characters.')
                            The password must be at least 8 characters and contain at least one uppercase character.
                        @else
                            {{ $message }}
                        @endif
                    </p>
                @enderror
            </div>



              <div>
                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                <x-input id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="password" placeholder="••••••••" name="password_confirmation" required autocomplete="new-password" />
                @error('password_confirmation')
                  <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
              </div>


            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
              <div class="flex items-start">
                <div class="flex items-center h-5">
                  <x-checkbox name="terms" id="terms" required />
                </div>
                <div class="ml-3 text-sm">
                  <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="{{ route('terms.show') }}">Terms and Conditions</a></label>
                </div>
              </div>
            @endif

            <div class="flex items-center justify-end mt-4">
              <a class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
              </a>
              <x-button class="ml-4 hover:text-blue-800">
                {{ __('Sign Up') }}
              </x-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</x-guest-layout >
