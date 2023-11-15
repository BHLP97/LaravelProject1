<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_title' => fake()->sentence(5),
            'book_author' => fake()->name(),
            'book_slug' => fake()->slug(),
            'book_cover' => fake()->imageUrl(),
            'book_category_id' => Category::all()->random()->id,
        ];
    }
}
