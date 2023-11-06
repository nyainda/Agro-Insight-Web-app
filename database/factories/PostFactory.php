<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB; // Add this line to import the DB facade
use Illuminate\Support\Facades\Hash; // Add this line to import the Hash facade

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Post::class; // Add the fully qualified model class name

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->realText(50); // Use $this->faker instead of fake()
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'thumbnail' => $this->faker->imageUrl(), // Use $this->faker instead of fake()
            'body' => $this->faker->realText(5000),
            'active' => $this->faker->boolean,
            'published_at' => $this->faker->dateTime,
            'user_id' => 1
        ];
    }
}
