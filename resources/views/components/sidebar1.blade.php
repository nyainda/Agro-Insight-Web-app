
<!--<aside class="w-full md:w-1/3 h-full flex flex-col  items-center px-4">-->
    <aside class="w-full md:w-1/3 md:px-3 md:flex md:flex-col ">
    @vite([ 'resources/css/app.css'])

    <div class="w-full  max-w-xl mt-4 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
        <h3 class="prose text-xl font-semibold font-serif mb-3 text-gray-800 dark:text-gray-200">All Categories</h3>
        @foreach($categories as $category)
            <a href="{{route('by-category', $category)}}"
               class="block py-2 px-3 rounded transition-colors duration-300 {{ request('category')?->slug === $category->slug
                ? 'bg-blue-600 text-white' : 'hover:bg-blue-800 font-serif dark:hover:bg-gray-700 dark:text-gray-300'}}">
                {{$category->title}} ({{$category->total}})
            </a>
        @endforeach
    </div>

    <div class="w-full max-w-xl mt-4 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <p class="prose mb-2 text-2xl font-serif font-bold tracking-tight text-gray-900 dark:text-white">
            {{ \App\Models\TextWidget::getTitle('about-us-sidebar') }}
        </p>
        <div class="prose max-w-none mb-3 font-normal font-serif text-gray-700 dark:text-gray-200 ">
            {!! \App\Models\TextWidget::getContent('about-us-sidebar') !!}
        </div>
        <a href="{{route('about-us')}}"
           class="w-full bg-blue-800 font-serif text-white font-bold text-sm uppercase rounded-lg hover:bg-blue-700 dark:hover:bg-gray-700 flex items-center justify-center px-3 py-3 mt-4 transition-colors duration-300">
            Get to know us
        </a>
    </div>

 <!-- Latest Post -->


</aside>

