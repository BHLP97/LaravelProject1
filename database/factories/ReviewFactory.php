<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'preview_image' => fake()->imageUrl(),
            'description' => fake()->text(),
            'content' => fake()->text(),
            'rating' => fake()->numberBetween(0,5),
            'book_id' => Book::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
