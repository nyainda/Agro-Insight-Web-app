<article class="flex flex-col shadow my-4 bg-white dark:bg-gray-800 rounded-lg ">
    @vite([ 'resources/css/app.css'])
    <!-- Article Image -->
    <a href="{{ route('view', $post) }}" class="relative font-serif block overflow-hidden hover:opacity-75 aspect-w-4 aspect-h-6">
        <img src="{{ $post->getThumbnail() }}" alt="{{ $post->title }}" class="rounded-lg object-cover w-full  h-64 md:h-54 lg:h-64 xl:h-72 shadow-sm transition-transform transform hover:scale-105 hover:shadow-md">
    </a>
    <!--<div class="overflow-hidden rounded-md bg-white shadow dark:bg-gray-800">-->


   <!--<div class="bg-white dark:bg-gray-800 flex flex-col p-4 md:p-6">-->
    <div class="bg-white dark:bg-gray-800 flex flex-col p-4 md:p-6">
    <!--<div class="flex items-center border-b border-gray-100 px-4 py-3 dark:border-gray-700 sm:px-6 gap-2">-->
        <div class="flex  flex-wrap gap-2">
            @foreach ($post->categories as $category)
                <a href="#" class="text-blue-700 font-serif text-sm font-bold uppercase pb-4">
                    {{ $category->title }}
                </a>
            @endforeach
        </div>
        <a href="{{ route('view', $post) }}" class="text-2xl font-serif md:text-3xl font-semibold hover:text-gray-800 dark:hover:text-gray-300 pb-2">
            {{ $post->title }}
        </a>
        @if ($showAuthor)
            <p href="#" class="text-sm pb-3">
                By <a href="#" class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, Published on
                {{$post->getFormattedDate()}} | {{ $post->human_read_time }}
            </p>
        @endif

        <p class="text-gray-700 dark:text-gray-100 font-serif text-base pb-1 md:text-lg lg:text-base xl:text-lg">
            {{ $post->shortBody(request()->is('medium-screen-route') ? 1 : 2) }}
        </p>

        <a href="{{ route('view', $post) }}" class="uppercase font-serif text-blue-600 dark:text-blue-300 font-semibold hover:underline flex items-center">
            Read More <i class="fas fa-arrow-right ml-1"></i>
        </a>
    </div>

</article>
