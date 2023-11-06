<x-app-layout :meta-title="$post->meta_title ?: $post->title" :meta-description="$post->meta_description">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<script src="{{asset('js/apps.js')}}" defer></script>
    @vite([ 'resources/css/app.css'])
    <div class="flex flex-col md:flex-row">
        <!-- Post Section -->
        <!--<section class="w-full md:w-2/3 flex flex-col px-2">-->
            <section class="w-full md:w-2/3 flex flex-col px-2">

            <article class="flex flex-col shadow my-4 bg-white dark:bg-gray-800 rounded-lg">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="{{ $post->getThumbnail() }}" alt="{{ $post->title }}" class="rounded-lg object-cover w-full h-64 md:h-56 lg:h-64 xl:h-72 shadow-sm transition-transform transform hover:scale-105 hover:shadow-md">
                </a>
                <div class="p-6">
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($post->categories as $category)
                            <a href="{{ route('blog') }}" class="text-blue-700 text-sm font-semibold uppercase hover:underline">
                                {{$category->title}}
                            </a>
                        @endforeach
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold  pb-4">
                        {{$post->title}}
                    </h1>
                    <p href="#" class="text-lg pb-3" style="font-size: 18px; font-family: Arial, sans-serif;">
                        By <a href="#" class="font-semibold hover:text-blue-800">{{$post->user->name}}</a>, Published on
                        {{$post->getFormattedDate()}} | {{ $post->human_read_time }}
                    </p>
                    <div class="  text-gray-800 dark:text-gray-100 space-y-6">
                        <div class="prose max-w-full">
                            <div class=" dark:text-gray-100 font-serif text-gray-900">
                                {!! str_replace('<h2>', '<h2 class="dark:text-gray-300 text-gray-900">', $post->body) !!}
                            </div>
                        </div>
                    </div>


                    <livewire:upvote-downvote :post="$post"/>

                    <div class="dark:text-gray-200 text-xl relative">
                        <button class="right-2 absolute dark:hover:text-blue-700 hover:text-blue-700 top-1/4 transform -translate-y-1/2" onclick="shareOnFacebook('{{ addslashes($post->body) }}')">
                            <i class="fab fa-facebook-square fa-lg"></i>
                        </button>
                        <button class="right-20 absolute dark:hover:text-blue-700 hover:text-blue-700 top-1/4 transform -translate-y-1/2" onclick="shareOnTwitter('{{ addslashes($post->body) }}')">
                            <i class="fab fa-twitter fa-lg"></i>
                        </button>
                        <button class="right-12 absolute dark:hover:text-blue-700 hover:text-blue-700  top-1/4 transform -translate-y-1/2" onclick="shareOnLinkedIn('{{ addslashes($post->body) }}')">
                            <i class="fab fa-linkedin fa-lg"></i>
                        </button>
                    </div>

                    <script>
                        function shareOnFacebook(postBody) {
                            const shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}`;
                            // Open a new window or tab with the Facebook sharing URL
                            window.open(shareUrl, '_blank');
                        }

                        function shareOnTwitter(postBody) {
                            const tweetText = encodeURIComponent(`Check out this blog post:\n\n${postBody}`);
                            const tweetUrl = `https://twitter.com/intent/tweet?text=${tweetText}`;
                            // Open a new window or tab with the Twitter sharing URL
                            window.open(tweetUrl, '_blank');
                        }

                        function shareOnLinkedIn(postBody) {
                            const linkedInText = encodeURIComponent(`Check out this blog post:\n\n${postBody}`);
                            const linkedInUrl = `https://www.linkedin.com/shareArticle?mini=true&url=${encodeURIComponent(window.location.href)}&title=${linkedInText}`;
                            // Open a new window or tab with the LinkedIn sharing URL
                            window.open(linkedInUrl, '_blank');
                        }
                    </script>

                </div>

            </article>
            <div class="w-full flex pt-6">
                <div class="flex flex-row mb-4 mx-auto">
                    @if($prev)
                        <a href="{{ route('view', $prev) }}"
                           class="flex items-center justify-center  bg-gray-800 text-white rounded-l-md border-r border-gray-100 py-2 hover:bg-blue-700 hover:text-white px-3">
                            <svg class=" w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="text-sm md:text-base font-serif font-semibold">{{ Illuminate\Support\Str::words($prev->title, 15) }}</p>
                            <span class="ml-1 text-xs font-serif md:text-sm text-gray-200">(Prev)</span>
                        </a>
                    @endif

                    @if($next)
                        <a href="{{ route('view', $next) }}"
                           class="flex items-center justify-center bg-gray-800 text-white rounded-r-md py-2 border-l border-gray-200 hover:bg-blue-700 hover:text-white px-3">
                            <p class="mr-1 text-xs md:text-sm font-serif text-gray-200">(Next)</p>
                            <p class="text-sm md:text-base font-serif font-semibold">{{ Illuminate\Support\Str::words($next->title, 5) }}</p>
                            <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    @endif
                </div>

            </div>

            <livewire:comments :model="$post"/>
        </section>

        <x-sidebar1/>
    </div>
</x-app-layout>
