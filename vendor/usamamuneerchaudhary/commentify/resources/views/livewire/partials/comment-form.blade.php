<form class="mb-8  dark:bg-gray-800 rounded-lg" wire:submit.prevent="{{$method}}">

    @if (session()->has('message'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                 role="alert">
                <span class="font-medium">Success!</span> {{session('message')}}
            </div>
        </div>
    @endif
    @csrf
    <div
        class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700
             ">
        <label for="{{$inputId}}" class="sr-only">{{$inputLabel}}</label>
        <textarea id="{{$inputId}}" rows="6"
                  class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none
                              dark:text-gray-200 dark:placeholder-gray-400 dark:bg-gray-800 @error($state.'.body')
                              border-red-500 @enderror"
                  placeholder="Write a comment..."
                  wire:model.defer="{{$state}}.body"
                  oninput="detectAtSymbol()"
        ></textarea>
        @if(!empty($users) && $users->count() > 0)
            @include('commentify::livewire.partials.dropdowns.users')
        @endif
        @error($state.'.body')
        <p class="mt-2 text-sm text-red-600">
            {{$message}}
        </p>
        @enderror
    </div>

    <button wire:loading.attr="disabled" type="submit"
            class="bg-gray-600 text-gray-300 px-4 py-2.5 rounded-lg font-medium text-xs
            focus:ring-4 focus:ring-primary-200 hover:bg-red-800
           ">
        <div wire:loading wire:target="{{$method}}">
            @include('commentify::livewire.partials.loader')
        </div>
        {{$button}}
    </button>

</form>


