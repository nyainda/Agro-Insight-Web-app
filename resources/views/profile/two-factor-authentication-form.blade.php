<x-action-section>
    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-300">
            @if ($this->enabled)
            {{ __('You have enabled two factor authentication.') }}
            @else
            {{ __('You have not enabled two factor authentication.') }}
            @endif
        </h3>

        <div class="max-w-xl  mt-3 text-sm text-gray-600 dark:text-gray-200">
            <p>
                {{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }}
            </p>
        </div>

        @if ($this->enabled)
        @if ($showingQrCode)
        <div class="max-w-xl mt-4 text-sm text-gray-600 dark:text-gray-400">
            <p class="font-semibold">
                {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application.') }}
            </p>
        </div>

        <div class="mt-4">
            {!! $this->user->twoFactorQrCodeSvg() !!}
        </div>
        @endif

        @if ($showingRecoveryCodes)
        <div class="max-w-xl mt-4 text-sm text-gray-600 dark:text-gray-400">
            <p class="font-semibold">
                {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
            </p>
        </div>

        <div class="grid max-w-xl gap-1 px-4 py-4 mt-4 font-mono text-sm bg-gray-100 rounded-lg">
            @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
            <div>{{ $code }}</div>
            @endforeach
        </div>
        @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
            <x-button type="button" wire:click="enableTwoFactorAuthentication" wire:loading.attr="disabled">
                {{ __('Enable') }}
            </x-button>
            @else
            @if ($showingRecoveryCodes)
            <x-secondary-button class="mr-3" wire:click="regenerateRecoveryCodes">
                {{ __('Regenerate Recovery Codes') }}
            </x-secondary-button>
            @else
            <x-secondary-button class="mr-3" wire:click="$toggle('showingRecoveryCodes')">
                {{ __('Show Recovery Codes') }}
            </x-secondary-button>
            @endif

            <x-danger-button wire:click="disableTwoFactorAuthentication" wire:loading.attr="disabled">
                {{ __('Disable') }}
            </x-danger-button>
            @endif
        </div>
    </x-slot>
</x-action-section>
