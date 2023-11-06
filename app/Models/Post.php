<?php

namespace App\Models;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory, Commentable;

    protected $fillable = ['title', 'slug', 'thumbnail', 'body', 'user_id', 'active', 'published_at', 'meta_title', 'meta_description'];

    protected $casts = [
        'published_at' => 'datetime'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

   // public function shortBody($words = 28): string
    //{
        //return Str::words(strip_tags($this->body), $words);
    //}

    public function shortBody($wordsMediumScreen = 1, $wordsLargeScreen = 26): string
{
    $wordsToDisplay = $wordsLargeScreen;

    if (request()->is('medium-screen-route')) {
        $wordsToDisplay = $wordsMediumScreen;
    }

    return Str::words(strip_tags($this->body), $wordsToDisplay);
}


    public function getFormattedDate()
    {
        return $this->published_at->format('F jS Y');
    }

    public function getThumbnail()
    {
        if (str_starts_with($this->thumbnail, 'http')) {
            return $this->thumbnail;
        }

        return '/storage/' . $this->thumbnail;
    }

    //public function toSearchableArray()
   // {
        //return [
           // 'id' => $this->id,
           // 'title' => $this->title,
           // 'body' => $this->body,
            // ... add more attributes you want to index
        //];
    //}

    public function humanReadTime(): Attribute
    {
        return new Attribute(
            get: function ($value, $attributes) {
                $words = Str::wordCount(strip_tags($attributes['body']));
                $minutes = ceil($words / 200);

                return $minutes . ' ' . str('min')->plural($minutes) . ', '
                    . $words . ' ' . str('word')->plural($words);
            }
        );
    }

}
