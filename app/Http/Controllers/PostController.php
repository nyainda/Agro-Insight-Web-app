<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostView;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\View\View;

class PostController extends Controller
{
    public ?string $metaTitle = null;
    public ?string $metaDescription = null;

    public function __construct(?string $metaTitle = null, ?string $metaDescription = null)
    {
        $this->metaTitle = $metaTitle ?? "agro-insight-blog";
        $this->metaDescription = $metaDescription ?? "agro-insight-blog";
    }

    // Blog page with recommendations
    public function blog(): view
    {
        // Fetch latest posts
        $latestPost = Post::where('active', 1)
            ->whereDate('published_at', '<', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->limit(5)
            ->get();

        // Fetch popular posts with upvote count
        $popularPosts = Post::query()
            ->leftJoin('upvote_downvotes', 'posts.id', '=', 'upvote_downvotes.post_id')
            ->select('posts.*', DB::raw('COUNT(upvote_downvotes.id) as upvote_count'))
            ->where(function ($query) {
                $query->whereNull('upvote_downvotes.is_upvote')
                    ->orWhere('upvote_downvotes.is_upvote', '=', 1);
            })
            ->where('active', 1)
            ->whereDate('published_at', '<', Carbon::now())
            ->orderByDesc('upvote_count')
            ->groupBy([
                'posts.id',
                'posts.title',
                'posts.slug',
                'posts.thumbnail',
                'posts.body',
                'posts.active',
                'posts.published_at',
                'posts.user_id',
                'posts.created_at',
                'posts.updated_at',
                'posts.meta_title',
                'posts.meta_description',
            ])
            ->limit(5)
            ->get();

        // Fetch paginated posts
        $posts = Post::query()
            ->where('active', 1)
            ->whereDate('published_at', '<', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(5);

        // Check if the user is logged in
        $user = auth()->user();

        // Determine recommended posts for logged-in and new users
        if ($user) {
            $leftJoin = "(SELECT cp.category_id, cp.post_id FROM upvote_downvotes
                            JOIN category_post cp ON upvote_downvotes.post_id = cp.post_id
                            WHERE upvote_downvotes.is_upvote = TRUE and upvote_downvotes.user_id = ?) as t";

            $recommendedPosts = Post::query()
                ->leftJoin('category_post as cp', 'posts.id', '=', 'cp.post_id')
                ->leftJoin(DB::raw($leftJoin), function ($join) {
                    $join->on('t.category_id', '=', 'cp.category_id')
                        ->on('t.post_id', '<>', 'cp.post_id');
                })
                ->select('posts.*')
                ->where('posts.id', '<>', DB::raw('t.post_id'))
                ->setBindings([$user->id])
                ->limit(6)
                ->get();
        } else {
            $recommendedPosts = Post::query()
                ->leftJoin('post_views', 'posts.id', '=', 'post_views.post_id')
                ->select('posts.*', DB::raw('COUNT(post_views.id) as view_count'))
                ->where('active', '=', TRUE)
                ->whereDate('published_at', '<', Carbon::now())
                ->orderByDesc('view_count')
                ->groupBy([
                    'posts.id',
                    'posts.title',
                    'posts.slug',
                    'posts.thumbnail',
                    'posts.body',
                    'posts.active',
                    'posts.published_at',
                    'posts.user_id',
                    'posts.created_at',
                    'posts.updated_at',
                    'posts.meta_title',
                    'posts.meta_description'
                ])
                ->limit(6)
                ->get();
        }

        // Fetch popular categories
        $categories = Category::query()
            ->join('category_post', 'categories.id', '=', 'category_post.category_id')
            ->select('categories.title', 'categories.slug', DB::raw('count(*) as total'))
            ->groupBy(['categories.title', 'categories.slug'])
            ->orderByDesc('total')
            ->limit(15)
            ->get();

        return view('blog')
            ->with('posts', $posts)
            ->with('metaTitle', $this->metaTitle)
            ->with('metaDescription', $this->metaDescription)
            ->with('latestPost', $latestPost)
            ->with('popularPosts', $popularPosts)
            ->with('recommendedPosts', $recommendedPosts)
            ->with('categories', $categories);
    }

    // Show individual post
    public function show(Post $post, Request $request)
    {
        // Check if the post is active and published
        if (!$post->active || $post->published_at > Carbon::now()) {
            abort(404);
        }

        // Fetch the next and previous posts
        $next = Post::query()
            ->where('active', true)
            ->whereDate('published_at', '<=', Carbon::now())
            ->whereDate('published_at', '<', $post->published_at)
            ->orderBy('published_at', 'desc')
            ->limit(1)
            ->first();

        $prev = Post::query()
            ->where('active', true)
            ->whereDate('published_at', '<=', Carbon::now())
            ->whereDate('published_at', '>', $post->published_at)
            ->orderBy('published_at', 'asc')
            ->limit(1)
            ->first();

        // Check if the user is authenticated
        if (Auth::check()) {
            $user = $request->user();
            // Check if the user has viewed the post in the last hour using the database
            $hasViewedPost = PostView::where('user_id', $user->id)
                ->where('post_id', $post->id)
                ->where('created_at', '>=', now()->subSeconds(3600))
                ->exists();

            if (!$hasViewedPost) {
                PostView::create([
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'post_id' => $post->id,
                    'user_id' => $user->id
                ]);
            }
        } else {
            // If the user is not authenticated, use the cookie-based tracking logic
            $cookieName = 'post_viewed_' . $post->id;
            $expireInterval = 3600; // 1 hour in seconds

            // Check if the user has a cookie indicating they've viewed the post recently
            if (!$request->cookie($cookieName)) {
                PostView::create([
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'post_id' => $post->id,
                    'user_id' => null
                ]);

                // Set a cookie to track the user's view for an hour
                cookie($cookieName, true, $expireInterval);
            }
        }

        return view('post.view', compact('post', 'prev', 'next'));
    }

    // Show posts by category
    public function byCategory(Category $category)
    {
        // Fetch latest posts
        $latestPost = Post::where('active', 1)
            ->whereDate('published_at', '<', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->limit(5)
            ->get();

        // Fetch popular posts with upvote count
        $popularPosts = Post::query()
            ->leftJoin('upvote_downvotes', 'posts.id', '=', 'upvote_downvotes.post_id')
            ->select('posts.*', DB::raw('COUNT(upvote_downvotes.id) as upvote_count'))
            ->where(function ($query) {
                $query->whereNull('upvote_downvotes.is_upvote')
                    ->orWhere('upvote_downvotes.is_upvote', '=', 1);
            })
            ->where('active', 1)
            ->whereDate('published_at', '<', Carbon::now())
            ->orderByDesc('upvote_count')
            ->groupBy([
                'posts.id',
                'posts.title',
                'posts.slug',
                'posts.thumbnail',
                'posts.body',
                'posts.active',
                'posts.published_at',
                'posts.user_id',
                'posts.created_at',
                'posts.updated_at',
                'posts.meta_title',
                'posts.meta_description',
            ])
            ->limit(5)
            ->get();

        // Fetch posts by category
        $posts = Post::query()
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->where('category_post.category_id', $category->id)
            ->where('active', true)
            ->whereDate('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        // Fetch popular categories
        $categories = Category::query()
            ->join('category_post', 'categories.id', '=', 'category_post.category_id')
            ->select('categories.title', 'categories.slug', DB::raw('count(*) as total'))
            ->groupBy(['categories.title', 'categories.slug'])
            ->orderByDesc('total')
            ->limit(15)
            ->get();

        // Check if the user is logged in
        $user = auth()->user();

        // Determine recommended posts for logged-in and new users
        if ($user) {
            $leftJoin = "(SELECT cp.category_id, cp.post_id FROM upvote_downvotes
                            JOIN category_post cp ON upvote_downvotes.post_id = cp.post_id
                            WHERE upvote_downvotes.is_upvote = TRUE and upvote_downvotes.user_id = ?) as t";

            $recommendedPosts = Post::query()
                ->leftJoin('category_post as cp', 'posts.id', '=', 'cp.post_id')
                ->leftJoin(DB::raw($leftJoin), function ($join) {
                    $join->on('t.category_id', '=', 'cp.category_id')
                        ->on('t.post_id', '<>', 'cp.post_id');
                })
                ->select('posts.*')
                ->where('posts.id', '<>', DB::raw('t.post_id'))
                ->setBindings([$user->id])
                ->limit(6)
                ->get();
        } else {
            $recommendedPosts = Post::query()
                ->leftJoin('post_views', 'posts.id', '=', 'post_views.post_id')
                ->select('posts.*', DB::raw('COUNT(post_views.id) as view_count'))
                ->where('active', '=', TRUE)
                ->whereDate('published_at', '<', Carbon::now())
                ->orderByDesc('view_count')
                ->groupBy([
                    'posts.id',
                    'posts.title',
                    'posts.slug',
                    'posts.thumbnail',
                    'posts.body',
                    'posts.active',
                    'posts.published_at',
                    'posts.user_id',
                    'posts.created_at',
                    'posts.updated_at',
                    'posts.meta_title',
                    'posts.meta_description'
                ])
                ->limit(6)
                ->get();
        }

        return view('blog')
            ->with('posts', $posts)
            ->with('metaTitle', $this->metaTitle)
            ->with('metaDescription', $this->metaDescription)
            ->with('latestPost', $latestPost)
            ->with('popularPosts', $popularPosts)
            ->with('recommendedPosts', $recommendedPosts)
            ->with('categories', $categories);
    }

    // Search for posts
    public function search(Request $request)
    {
        $q = $request->get('q');

        $posts = Post::query()
            ->where('active', true)
            ->whereDate('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->where(function ($query) use ($q) {
                $query->where('title', 'like', "%$q%")
                    ->orWhere('body', 'like', "%$q%");
            })
            ->paginate(10);

        return view('post.search', compact('posts'));
    }
}
