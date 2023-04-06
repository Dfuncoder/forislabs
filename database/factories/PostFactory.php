<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->realText(25);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'summary' => $this->faker->realText(120),
            'body' => $this->faker->realText(5000),
            'image_url' => 'https://dummyimage.com/720x400',
            'featured' => $this->faker->boolean(40),
            'published_at' => $this->faker->dateTime()
        ];
    }
}
