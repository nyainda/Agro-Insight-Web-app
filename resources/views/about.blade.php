<x-app-layout meta-title="agro-insight-blog - About Us">
    <section class="flex items-center bg-stone-100 xl:min-h-screen font-poppins dark:bg-gray-800">
        <div class="flex-1 max-w-6xl py-4 mx-auto lg:py-6 md:px-6">

            <div class="flex flex-col lg:flex-row-reverse">
                <div class="w-full lg:w-1/2 mb-6 lg:mb-0 lg:mr-8">
                    @if($widget && $widget->image)
                        <img src="/storage/{{ $widget->image }}" alt="Widget Image"
                            class="md:mr-4 sm:mr-4 object-cover rounded-tl-md rounded-tr-md lg:rounded-bl-md lg:rounded-t-md lg:rounded-b-md w-full h-96">
                    @endif
                </div>
                <div class="w-full dark:shadow-md  lg:w-1/2 mb-8 px-4 rounded-lg bg-white dark:bg-gray-800">
                    <h2 class="mt-4 font-serif mb-4 text-3xl font-bold text-gray-700 dark:text-gray-300">
                        We Provide Better Facilities
                    </h2>
                    <div class="font-serif prose max-w-none  text-base text-gray-700 dark:text-gray-300">
                        {!! $widget ? $widget->content : '' !!}
                    </div>

                    <a href="{{ route('blog') }}"
                        class="mt-4 mb-1 px-6 py-3 text-white bg-blue-500 hover:bg-blue-600 dark:bg-blue-400 dark:hover:bg-blue-500 dark:hover:text-gray-100 inline-block rounded-md transition-all">
                        Discover More
                    </a>
                </div>

            </div>
        </div>
    </section>
    <footer class="bg-grey-200 rounded-lg shadow sm:flex sm:items-center sm:justify-center p-4 sm:p-6 xl:p-8 dark:bg-gray-800">

        <div class="mb-4 text-sm text-center text-gray-800 dark:text-gray-400 sm:mb-0 items-center">
            <div class="uppercase text-lg">&copy; {{ date('Y') }} Agro-insight.com</div>
        </div>

    </footer>
</x-app-layout>
