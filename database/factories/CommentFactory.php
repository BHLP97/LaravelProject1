<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $num_category = Comment::count();
        $random_number = fake()->randomDigit();
        if($num_category > 0 && $random_number < 4) {
            return [
                'content' => fake()->text(),
                'parent_id' => Comment::all()->random()->id,
                'review_id' => Review::all()->random()->id,
                'user_id' => User::all()->random()->id,
            ];
        } else {
            return [
                'content' => fake()->text(),
                'parent_id' => 0,
                'review_id' => Review::all()->random()->id,
                'user_id' => User::all()->random()->id,
            ];
        }
    }
}
