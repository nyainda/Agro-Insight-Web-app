<div>
    @if($isEditing)
        @include('commentify::livewire.partials.comment-form',[
            'method'=>'editComment',
            'state'=>'editState',
            'inputId'=> 'reply-comment',
            'inputLabel'=> 'Your Reply',
            'button'=>'Edit Comment'
        ])
    @else
        <article class="p-6 mb-2 shadow my-4 text-base dark:text-gray-100 bg-white rounded-lg dark:bg-gray-900">
            <footer class="flex justify-between items-center mb-1">


                <div class="flex items-center">

                    <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                            class="mr-2 w-6 h-6 rounded-full"
                            src="{{$comment->user->avatar()}}"
                            alt="{{$comment->user->name}}">{{Str::ucfirst($comment->user->name)}}</p>
                    <p class="text-sm text-gray-900 dark:text-gray-400">
                        <time pubdate datetime="{{$comment->presenter()->relativeCreatedAt()}}"
                              title="{{$comment->presenter()->relativeCreatedAt()}}">
                            {{$comment->presenter()->relativeCreatedAt()}}
                        </time>
                    </p>
                </div>
                <div class="relative">
                    <button wire:click="$toggle('showOptions')"
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            type="button">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                            </path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    @if($showOptions)
                        <div
                            class="absolute z-10 top-full right-0 mt-1 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                @can('update',$comment)
                                    <li>
                                        <button wire:click="$toggle('isEditing')" type="button"
                                                class="block w-full text-left py-2 px-4 hover:bg-gray-100
                                           dark:hover:bg-gray-600
                                           dark:hover:text-white">Edit
                                        </button>
                                    </li>
                                @endcan
                                @can('destroy',$comment)
                                    <li>

                                        <button
                                            x-on:click="confirmCommentDeletion"
                                            x-data="{
                                    confirmCommentDeletion(){
                                        if(window.confirm('You sure to delete this comment?')){
                                            @this.call('deleteComment')
                                        }
                                    }
                                }"
                                            class="block w-full text-left py-2 px-4 hover:bg-gray-100
                                            dark:hover:bg-gray-600 dark:hover:text-white">
                                            Delete
                                        </button>
                                    </li>
                                @endcan
                                {{--                                <li>--}}
                                {{--                                    <a href="#"--}}
                                {{--                                       class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>--}}
                                {{--                                </li>--}}
                            </ul>
                        </div>
                    @endif
                </div>
            </footer>
            <p class="text-gray-700 dark:text-gray-400">
                {!! $comment->presenter()->replaceUserMentions($comment->presenter()->markdownBody()) !!}
            </p>

            <div class="flex items-center mt-4 space-x-4">
                <livewire:like :comment="$comment" :key="$comment->id"/>
                @auth
                    @if($comment->isParent())
                        <button type="button" wire:click="$toggle('isReplying')"
                                class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                            <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            Reply
                        </button>
                        <div wire:loading wire:target="$toggle('isReplying')">
                            @include('commentify::livewire.partials.loader')
                        </div>
                    @endif
                @endauth
                @if($comment->children->count())
                    <button type="button" wire:click="$toggle('hasReplies')"
                            class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                        @if(!$hasReplies)
                            View all Replies ({{$comment->children->count()}})
                        @else
                            Hide Replies
                        @endif
                    </button>
                    <div wire:loading wire:target="$toggle('hasReplies')">
                        @include('commentify::livewire.partials.loader')
                    </div>
                @endif

            </div>

        </article>
    @endif
    @if($isReplying)
        @include('commentify::livewire.partials.comment-form',[
           'method'=>'postReply',
           'state'=>'replyState',
           'inputId'=> 'reply-comment',
           'inputLabel'=> 'Your Reply',
           'button'=>'Post Reply'
       ])
    @endif
    @if($hasReplies)

        <article class="p-1 mb-1 ml-1 lg:ml-12 border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
            @foreach($comment->children as $child)
                <livewire:comment :comment="$child" :key="$child->id"/>
            @endforeach
        </article>
    @endif
    <script>
        function detectAtSymbol() {
            const textarea = document.getElementById('reply-comment');

            // Check if the textarea element exists
            if (!textarea) {
                console.warn("Couldn't find the 'reply-comment' element.");
                return;
            }

            const cursorPosition = textarea.selectionStart;
            const textBeforeCursor = textarea.value.substring(0, cursorPosition);
            const atSymbolPosition = textBeforeCursor.lastIndexOf('@');

            if (atSymbolPosition !== -1) {
                const searchTerm = textBeforeCursor.substring(atSymbolPosition + 1);

                if (searchTerm.trim().length > 0) {
                    window.livewire.emit('getUsers', searchTerm);
                }
            }
        }
    </script>

</div>


