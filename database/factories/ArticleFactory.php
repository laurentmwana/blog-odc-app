<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->unique()->text(80);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'image' => fake()->imageUrl(640, 480),
            'author' => fake()->name(),
            'content' => fake()->text(),
        ];
    }
}
