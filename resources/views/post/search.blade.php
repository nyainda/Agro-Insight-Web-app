<x-app-layout>
    <div class="container mx-auto flex flex-wrap py-6">
        <!-- Posts Section -->
        <section class="w-full md:w-2/3 px-3">
            <div class="flex flex-col space-y-6">
                @if(count($posts) > 0)
                    @foreach($posts as $post)
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                            <a href="{{ route('view', $post) }}">
                                <h2 class="text-blue-500 font-bold font-serif text-lg sm:text-xl mb-2">
                                    {!! str_replace(request()->get('q'), '<span class="bg-yellow-300">{{ request()->get("q") }}</span>', $post->title) !!}
                                </h2>
                            </a>
                            <div class="text-gray-800 prose max-w-none font-serif dark:text-gray-400">
                                {{ $post->shortBody() }}
                            </div>

                            <div class="text-gray-700 font-serif dark:text-gray-300">
                                Published: {{ $post->published_at->format('M d, Y') }}
                            </div>
                        </div>
                        <hr class="my-4">
                    @endforeach
                    {{ $posts->links() }}
                @else
                    <p class="text-center font-serif text-gray-600 dark:text-gray-400">No matching posts found.</p>
                @endif
            </div>
        </section>

        <!-- Sidebar Section -->
        <x-sidebar1/>
    </div>
    <footer class="bg-grey-200 rounded-lg shadow sm:flex sm:items-center sm:justify-center p-4 sm:p-6 xl:p-8 dark:bg-gray-800">

        <div class="mb-4 text-sm text-center text-gray-800 dark:text-gray-400 sm:mb-0 items-center">
            <div class="uppercase text-lg">&copy; {{ date('Y') }} Agro-insight.com</div>
        </div>

    </footer>
</x-app-layout>
