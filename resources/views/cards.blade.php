<x-app-layout>

    <div class="py-12">
        <div>
            <livewire:comments :model="$post"/>
        </div>

</div>
</x-app-layout>
<input type="email" name="email" value="" required="required" autocomplete="email" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-200 rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-primary dark:focus:border-primary focus:outline-none focus:ring focus:ring-primary dark:placeholder-gray-400 focus:ring-opacity-20">
<body class="filament-body min-h-screen overflow-y-auto bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">


    <div class="filament-login-page flex min-h-screen items-center justify-center bg-gray-100 py-12 text-gray-900 dark:bg-gray-900 dark:text-white">
    <div class="-mt-16 w-screen space-y-8 px-6 md:mt-0 md:px-2 max-w-md">
        <div class="relative space-y-4 rounded-2xl border border-gray-200 bg-white/50 p-8 shadow-2xl backdrop-blur-xl dark:border-gray-700 dark:bg-gray-900/50">
            <div class="flex w-full justify-center">
                <div class="filament-brand text-xl font-bold leading-5 tracking-tight dark:text-white">
    agro-insight
</div>
            </div>

                                <h2 class="text-center text-2xl font-bold tracking-tight">
                    Login
                </h2>

            <div>
                <form wire:id="GdwwFfxrF3wvPEgkUzd2" wire:submit.prevent="authenticate" class="space-y-8">
<div class="grid grid-cols-1      filament-forms-component-container gap-6">
<div class="col-span-1" wire:key="GdwwFfxrF3wvPEgkUzd2.email.Filament\Forms\Components\TextInput">
<div class="filament-forms-field-wrapper">

<div class="space-y-2">
                <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                <label class="filament-forms-field-wrapper-label inline-flex items-center space-x-3 rtl:space-x-reverse" for="email">


<span class="text-sm font-medium leading-4 text-gray-700 dark:text-gray-300">

    Email address<sup class="text-danger-700 whitespace-nowrap font-medium dark:text-danger-400">
            *
        </sup>
        </span>


</label>

                        </div>

    <div class="filament-forms-text-input-component group flex items-center space-x-2 rtl:space-x-reverse">



    <div class="flex-1">
        <input x-data="{}" wire:model.defer="email" type="email" dusk="filament.forms.email" autocomplete="on" id="email" required="" class="filament-forms-input block w-full rounded-lg shadow-sm outline-none transition duration-75 focus:ring-1 focus:ring-inset disabled:opacity-70 dark:bg-gray-700 dark:text-white border-gray-300 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:focus:border-primary-500" x-bind:class="{
                'border-gray-300 focus:border-primary-500 focus:ring-primary-500': ! (
                    'email' in $wire.__instance.serverMemo.errors
                ),
                'dark:border-gray-600 dark:focus:border-primary-500':
                    ! ('email' in $wire.__instance.serverMemo.errors) &amp;&amp; true,
                'border-danger-600 ring-danger-600 focus:border-danger-500 focus:ring-danger-500':
                    'email' in $wire.__instance.serverMemo.errors,
                'dark:border-danger-400 dark:ring-danger-400 dark:focus:border-danger-500 dark:focus:ring-danger-500':
                    'email' in $wire.__instance.serverMemo.errors &amp;&amp; true,
            }">
    </div>



        </div>


        </div>
</div>
</div>

    <div class="col-span-1" wire:key="GdwwFfxrF3wvPEgkUzd2.password.Filament\Forms\Components\TextInput">
<div class="filament-forms-field-wrapper">

<div class="space-y-2">
                <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                <label class="filament-forms-field-wrapper-label inline-flex items-center space-x-3 rtl:space-x-reverse" for="password">


<span class="text-sm font-medium leading-4 text-gray-700 dark:text-gray-300">

    Password<sup class="text-danger-700 whitespace-nowrap font-medium dark:text-danger-400">
            *
        </sup>
        </span>


</label>

                        </div>

    <div class="filament-forms-text-input-component group flex items-center space-x-2 rtl:space-x-reverse">



    <div class="flex-1">
        <input x-data="{}" wire:model.defer="password" type="password" dusk="filament.forms.password" id="password" required="" class="filament-forms-input block w-full rounded-lg shadow-sm outline-none transition duration-75 focus:ring-1 focus:ring-inset disabled:opacity-70 dark:bg-gray-700 dark:text-white border-gray-300 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:focus:border-primary-500" x-bind:class="{
                'border-gray-300 focus:border-primary-500 focus:ring-primary-500': ! (
                    'password' in $wire.__instance.serverMemo.errors
                ),
                'dark:border-gray-600 dark:focus:border-primary-500':
                    ! ('password' in $wire.__instance.serverMemo.errors) &amp;&amp; true,
                'border-danger-600 ring-danger-600 focus:border-danger-500 focus:ring-danger-500':
                    'password' in $wire.__instance.serverMemo.errors,
                'dark:border-danger-400 dark:ring-danger-400 dark:focus:border-danger-500 dark:focus:ring-danger-500':
                    'password' in $wire.__instance.serverMemo.errors &amp;&amp; true,
            }">
    </div>



        </div>


        </div>
</div>
</div>

    <div class="col-span-1" wire:key="GdwwFfxrF3wvPEgkUzd2.remember.Filament\Forms\Components\Checkbox">
<div class="filament-forms-field-wrapper">

<div class="space-y-2">
                <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                                <label class="filament-forms-field-wrapper-label inline-flex items-center space-x-3 rtl:space-x-reverse" for="remember">
<input wire:loading.attr="disabled" id="remember" type="checkbox" wire:model.defer="remember" dusk="filament.forms.remember" class="filament-forms-checkbox-component filament-forms-input rounded text-primary-600 shadow-sm transition duration-75 focus:border-primary-500 focus:ring-2 focus:ring-primary-500 disabled:opacity-70 dark:bg-gray-700 dark:checked:bg-primary-500 border-gray-300 dark:border-gray-600">

<span class="text-sm font-medium leading-4 text-gray-700 dark:text-gray-300">

    Remember me    </span>


</label>

                        </div>




        </div>
</div>
</div>
</div>


<button type="submit" wire:loading.attr="disabled" wire:loading.class.delay="opacity-70 cursor-wait" wire:target="authenticate" x-data="{
        form: null,
        isUploadingFile: false,
    }" x-bind:disabled="isUploadingFile" x-init="
        form = $el.closest('form')

        form?.addEventListener('file-upload-started', () => {
            isUploadingFile = true
        })

        form?.addEventListener('file-upload-finished', () => {
            isUploadingFile = false
        })
    " x-bind:class="{ 'enabled:opacity-70 enabled:cursor-wait': isUploadingFile }" class="filament-button filament-button-size-md inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset dark:focus:ring-offset-0 min-h-[2.25rem] px-4 text-sm text-white shadow focus:ring-white border-transparent bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 w-full">

                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="animate-spin filament-button-icon w-5 h-5 mr-1 -ml-2 rtl:ml-1 rtl:-mr-2" wire:loading.delay="wire:loading.delay" wire:target="authenticate">
<path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>

    <span class="flex items-center gap-1">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="animate-spin filament-button-icon w-5 h-5 mr-1 -ml-2 rtl:ml-1 rtl:-mr-2" x-show="isUploadingFile" style="display: none;">
<path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>

            <span x-show="isUploadingFile" style="display: none;">
                Uploading file...
            </span>

            <span x-show="! isUploadingFile" class="">
                Sign in
            </span>
                </span>

        </button>
</form>

<!-- Livewire Component wire-end:GdwwFfxrF3wvPEgkUzd2 -->
            </div>
        </div>
    </div>
</div>

<div wire:id="5mEjfa51oWyjVPP9g7zY">
<div class="filament-notifications pointer-events-none fixed inset-4 z-50 mx-auto flex gap-3 items-end flex-col-reverse justify-end" role="status">
        </div>


</div>

<!-- Livewire Component wire-end:5mEjfa51oWyjVPP9g7zY -->



    <!-- Livewire Scripts -->

<script src="/vendor/livewire/livewire.js?id=90730a3b0e7144480175" data-turbo-eval="false" data-turbolinks-eval="false"></script>
<script data-turbo-eval="false" data-turbolinks-eval="false">
if (window.livewire) {
    console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')
}

window.livewire = new Livewire();
window.livewire.devTools(true);
window.Livewire = window.livewire;
window.livewire_app_url = '';
window.livewire_token = '9j3GFyszs3ruSK7YD3liIw0HkJK0eL3bi0G2aAd9';

/* Make sure Livewire loads first. */
if (window.Alpine) {
    /* Defer showing the warning so it doesn't get buried under downstream errors. */
    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(function() {
            console.warn("Livewire: It looks like AlpineJS has already been loaded. Make sure Livewire\'s scripts are loaded before Alpine.\\n\\n Reference docs for more info: http://laravel-livewire.com/docs/alpine-js")
        })
    });
}

/* Make Alpine wait until Livewire is finished rendering to do its thing. */
window.deferLoadingAlpine = function (callback) {
    window.addEventListener('livewire:load', function () {
        callback();
    });
};

let started = false;

window.addEventListener('alpine:initializing', function () {
    if (! started) {
        window.livewire.start();

        started = true;
    }
});

document.addEventListener("DOMContentLoaded", function () {
    if (! started) {
        window.livewire.start();

        started = true;
    }
});
</script>

    <script>
        window.filamentData = []        </script>



    <script defer="" src="http://127.0.0.1:8000/filament/assets/app.js?id=de109909e799e20eb15da26295309fa5"></script>

                <script defer="" src="http://127.0.0.1:8000/filament/assets/echo.js?id=19f331c9f76ec80cb5e5e344fef18d68"></script>

        <script>
            window.addEventListener('DOMContentLoaded', () => {
                window.Echo = new window.EchoFactory(JSON.parse('{\u0022broadcaster\u0022:\u0022pusher\u0022,\u0022key\u0022:\u0022\u0022,\u0022cluster\u0022:\u0022mt1\u0022,\u0022wsHost\u0022:\u0022\u0022,\u0022wsPort\u0022:\u0022443\u0022,\u0022wssPort\u0022:\u0022443\u0022,\u0022forceTLS\u0022:true}'))

                window.dispatchEvent(new CustomEvent('EchoLoaded'))
            })
        </script>








</body>

<x-app-layout meta-title="agro-insight-blog - About us" >

    <div class="container mx-auto py-6">
        @vite([ 'resources/css/app.css'])
        <!-- Post Section -->
        <section class="w-full md:w-full flex flex-col items-center px-4">

            <article class="flex flex-col shadow-lg my-4 bg-white dark:bg-gray-800">
                @if($widget && $widget->image)
                    <img src="/storage/{{ $widget->image }}" alt="Widget Image" class="object-cover w-full h-64 rounded-t-md">
                @endif

                <div class="p-6 rounded-b-md">
                    <h1 class="text-3xl font-semibold text-gray-800 dark:text-gray-200 hover:text-gray-700 pb-4">
                        {{$widget ? $widget->title : ''}}
                    </h1>
                    <div class="prose text-gray-700 dark:text-gray-300">
                        {!! $widget ? $widget->content : '' !!}
                    </div>
                </div>
            </article>

            <a href="{{ route('blog') }}" class="text-blue-600 hover:underline mt-6">
                Return Home
            </a>
        </section>
 <!--<aside class=" md:w-1/3 flex-grow lg:col-span-4 lg:block xl:col-span-5" style="height: auto !important;">-->
    <aside class=" md:px-0 md:w-1/3 h-full flex lg:px-0 flex-col items-center px-4">-->


        <div class="flex flex-col divide-y  divide-gray-700">
        <div class="flex px-1 py-4">

            <div class="flex flex-col flex-grow">
                <p class="prose mb-2 text-2xl font-serif font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ \App\Models\TextWidget::getTitle('about-us-sidebar') }}
                </p>
                <div class=" md:mx-1 md:prose prose max-w-none md:max-w-none mb-3 font-normal font-serif text-gray-700 dark:text-gray-200 ">
                    {!! \App\Models\TextWidget::getContent('about-us-sidebar') !!}
                </div>
                <a href="{{route('about-us')}}"
                   class="w-full bg-blue-800 font-serif text-white font-bold text-sm uppercase rounded-lg hover:bg-blue-700 dark:hover:bg-gray-700 flex items-center justify-center px-3 py-3  transition-colors duration-300">
                    Get to know us
                </a>
            </div>
        </div>
        </div>


        <div class="flex flex-col divide-y  divide-gray-700">

            <h2 class="text-xl mx-2 font-serif mt-2 sm:text-2xl  font-bold text-blue-500 uppercase border-b-2 border-blue-500 pb-2 mb-4">
                Latest Posts
            </h2>
            <div class="flex md:h-1/2 px-1 py-4">
                @if ($latestPost)
                <x-post-item :post="$latestPost" />
                @endif

            </div>
            </div>
            <div class="flex flex-col divide-y  divide-gray-700">

                <h2 class="text-xl mx-2 font-serif mt-2 sm:text-2xl  font-bold text-yellow-500 uppercase border-b-2 border-yellow-500 pb-2 mb-4">
                    Recommended Posts
                </h2>
                <div class="md:h-1/2 px-1 py-4">
                    @foreach($recommendedPosts as $post)
                    <x-post-item :post="$post" :show-author="false"/>
                    @unless($loop->last)
                        <hr class="border-t border-gray-200 dark:border-gray-700" />
                    @endunless
                @endforeach

                </div>
                </div>

    </aside>

