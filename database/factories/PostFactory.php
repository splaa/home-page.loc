<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $images = [
            'img/blog-card-1.png',
            'img/blog-card-2.png',
            'img/blog-card-3.png',
            'img/blog-card-4.png',
            'img/blog-card-5.png',
            'img/blog-card-6.png',
        ];

        $title = $this->faker->word(3);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'category_id' => Arr::random(Category::pluck('id')->toArray()),
            'user_id' => Arr::random(User::pluck('id')->toArray()),
            'description' => $this->faker->text(20),
            'content' => $this->faker->text(100),
            'img' => Arr::random($images),
        ];
    }
}
