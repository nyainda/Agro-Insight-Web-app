<x-app-layout title="Forms">


    <title>{{ $metaTitle ?: 'agro-insight-blog' }}</title>
    <meta name="author" content="agro-insight-blog">
    <meta name="description" content="{{ $metaDescription }}">

    <link rel="stylesheet" href="{{ asset('css/apps.css') }}">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>
@livewireStyles


    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <body class="bg-gray-50 font-family-karla">



        <!-- Text Header -->
        <header class="w-full bg-gradient-to-r from-purple-500 via-indigo-500 to-pink-500 dark:from-gray-800 dark:via-gray-700 dark:to-gray-600">
            <div class="container mx-auto">
                <div class="flex flex-col items-center py-12">
                    <a class="font-bold font-serif text-xl md:text-5xl hover:text-indigo-300 transition-colors text-white dark:text-gray-300 dark:hover:text-indigo-500 uppercase tracking-wide" href="{{ route('blog') }}">
                        <span class="text-indigo-400 font-serif dark:text-indigo-400">AGRO-</span><span class="text-purple-400 font-serif dark:text-purple-300">INSIGHT</span> <span class="text-pink-400 font-serif dark:text-pink-300">BLOG</span>
                    </a>

                    <p class="mt-4 text-lg font-serif text-gray-300 dark:text-gray-300 max-w-xl text-center">
                        Explore the latest insights and trends in agriculture, sustainability, and innovation. Join us in the journey towards a greener future.
                    </p>
                </div>
            </div>
        </header>



    <!-- Topic Nav -->
    <nav class="bg-white shadow-md dark:bg-gray-800">
        <div class="w-full container mx-auto flex justify-between items-center text-md font-semibold uppercase mt-0 px-8 py-4">
            <!-- Logo or Branding could be added here -->

            <!-- Desktop Menu -->
            <div class="hidden md:flex justify-center items-center space-x-6 flex-grow md:justify-start md:space-x-2" id="desktopMenu">
                <a href="{{ route('blog') }}" class="dark:text-white font-serif hover:text-indigo-400 transition-colors">Home</a>
                @foreach ($categories as $category)
                    <a href="{{ route('by-category', $category) }}" class="dark:text-white font-serif hover:text-indigo-400 transition-colors
                    md:max-w-xs truncate">{{ $category->title }}</a>
                @endforeach
                <a href="{{ route('about-us') }}" class="dark:text-white font-serif hover:text-indigo-400 transition-colors text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl truncate">About us</a>

            </div>

            <!-- Mobile Menu Button -->
            <div class=" md:hidden">
                <button id="mobileMenuButton" class="dark:text-white p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-blue ">
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <div id="mobileMenu" class="hidden md:hidden bg-gray-500 text-gray-900 dark:bg-gray-800">
        <div class="container mx-auto py-4">
            <div class="flex flex-col space-y-6">
                <a href="{{ route('blog') }}" class="block text-white hover:text-indigo-400 transition-colors">Home</a>
                @foreach ($categories as $category)
                    <a href="{{ route('by-category', $category) }}" class="block text-white hover:text-indigo-400 transition-colors">{{ $category->title }}</a>
                @endforeach
                <a href="{{ route('about-us') }}" class="block text-white hover:text-indigo-400 transition-colors">About us</a>
            </div>
        </div>
    </div>


   <!--<div class="container bg-grey-200 mx-auto py-6 flex flex-wrap">-->
    <div class="flex flex-col md:flex-row">
        <!-- Posts Section -->
        <section class="w-full md:w-2/3  px-3">
            <div class=" flex flex-col items-center">
                @foreach($posts as $post)
                    <x-post-item :post="$post"/>
                @endforeach
            </div>
            {{ $posts->links() }}
        </section>

        <!-- Sidebar Section -->

      {{--<x-sidebar-1 class="w-full md:w-1/3 px-3 md:mr-4" />--}}
      <aside class="w-full md:w-1/3 md:px-3 md:flex md:flex-col ">

    {{--category--}}
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
         {{--lastest posts--}}

        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
            <h4 class="text-2xl font-bold mb-4 font-serif text-blue-600 dark:text-blue-400">Latest Posts</h4>
            <ul class="space-y-4">
                @foreach ($latestPost as $post)
                    <li class="flex items-start space-x-2 pb-2 border-b border-gray-300 dark:border-gray-700">
                        <span class="font-bold text-blue-600 dark:text-blue-400">&gt;</span>
                        <a href="{{  route('view', ['post' => $post->slug, 'slug' => $post->slug]) }}" class="text-blue-600 font-serif hover:text-red-700 dark:text-blue-400">
                            {{ $post->title }}
                        </a>
                    </li>
                    @endforeach
            </ul>
        </div>
 {{-- Recommended Posts--}}
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg mt-4 p-6">

            <h4 class="text-2xl font-bold mb-4 font-serif text-yellow-600 dark:text-yellow-400">
                Recommended Posts
            </h4>
            <ul class="space-y-4">

                @foreach($recommendedPosts as $post)
                    <li class="flex items-start space-x-2 pb-2 border-b border-gray-300 dark:border-gray-700">
                        <span class="font-bold text-blue-600 dark:text-blue-400">&gt;</span>
                        <a href="{{  route('view', ['post' => $post->slug, 'slug' => $post->slug]) }}" class="text-blue-600 font-serif hover:text-red-700 dark:text-blue-400">
                            {{ $post->title }}
                        </a>
                    </li>
                    @endforeach
            </ul>
        </div>
 {{--Popular Posts--}}
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg mt-4 p-6">

            <h4 class="text-2xl font-serif font-bold mb-4 text-green-600 dark:text-green-400">
                Popular Posts
            </h4>
            <ul class="space-y-4">
                @foreach($popularPosts as $post)
                    <li class="flex items-start space-x-2 pb-2 border-b border-gray-300 dark:border-gray-700">
                        <span class="font-bold text-blue-600 dark:text-blue-400">&gt;</span>
                        <a href="{{  route('view', ['post' => $post->slug, 'slug' => $post->slug]) }}" class="text-blue-600 hover:text-red-700 font-serif dark:text-blue-400">
                            {{ $post->title }}
                        </a>
                    </li>
                    @endforeach
            </ul>
        </div>



    {{--lastest posts--
        <h2 class="text-xl mx-2 font-serif mt-4 sm:text-2xl  font-bold text-blue-500 uppercase border-b-2 border-blue-500 pb-2 mb-4">
            Latest Posts
        </h2>

        @if ($latestPost)
        <x-post-item :post="$latestPost" />
        @endif
    --}}
    {{--recommended posts--
        <h2 class="text-xl mx-2 font-serif mt-2 sm:text-2xl  font-bold text-yellow-500 uppercase border-b-2 border-yellow-500 pb-2 mb-4">
            Recommended Posts
        </h2>
        @foreach($recommendedPosts as $post)
        <x-post-item :post="$post" :show-author="false"/>
        @unless($loop->last)
            <hr class="border-t border-gray-200 dark:border-gray-700" />
        @endunless
    @endforeach
    --}}

    {{--popular post --
    <h2 class="text-xl mx-2 font-serif mt-2 sm:text-2xl  font-bold text-green-500 uppercase border-b-2 border-green-500 pb-2 mb-4">
        Popular Posts
    </h2>
    <div class="w-full  max-w-xl mt-4 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
    @foreach($popularPosts as $post)
                    <div class="grid grid-cols-4 gap-2 mb-4">
                        <a href="{{route('view', $post)}}" class="pt-1">
                            <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}" />
                        </a>
                        <div class="col-span-3">
                            <a href="{{route('view', $post)}}">
                                <h3 class="text-sm dark:text-gray-200 font-serif uppercase whitespace-nowrap truncate">{{$post->title}}</h3>
                            </a>
                           {{-- <div class="flex gap-4 mb-2">
                                @foreach($post->categories as $category)
                                    <a href="#" class="bg-blue-500 text-white p-1 rounded text-xs font-bold uppercase">
                                        {{$category->title}}
                                    </a>
                                @endforeach
                            </div>--
                            <div class="dark:text-gray-200 prose font-serif text-sm">
                                {{$post->shortBody(10)}}
                            </div>
                            <a href="{{ route('view', $post) }}" class="uppercase font-serif text-red-600 dark:text-blue-300 font-semibold hover:underline text-xs flex items-center">
                                Read More <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
    </div>--}}

      </aside>

    </div>


    <footer class="bg-grey-200 rounded-lg shadow sm:flex sm:items-center sm:justify-center p-4 sm:p-6 xl:p-8 dark:bg-gray-800">

        <div class="mb-4 text-sm text-center text-gray-800 dark:text-gray-400 sm:mb-0 items-center">

            <div class="font-serif uppercase text-lg">&copy; {{ date('Y') }} Agro-<span class="text-blue-900">insight</span>.com

            </div>
        </div>

    </footer>

<script>
  document.addEventListener('DOMContentLoaded', function () {
                const mobileMenuButton = document.getElementById('mobileMenuButton');
                const mobileMenu = document.getElementById('mobileMenu');

                mobileMenuButton.addEventListener('click', function () {
                    mobileMenu.classList.toggle('hidden');
                });
            });
</script>

@livewireStyles
</x-app-layout>



