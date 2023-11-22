<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $num_category = Category::count();
        $random_number = fake()->randomDigit();
        if($num_category > 0 && $random_number < 3) {
            return [
                'name' => fake()->name(),
                'slug' => fake()->slug(),
                'icon' => fake()->imageUrl(),
                'status' => fake()->boolean(),
                'parent_id' => Category::all()->random()->id,
            ];
        } else {
            return [
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'icon' => fake()->imageUrl(),
            'status' =>fake()->boolean(),
            'parent_id' => 0
            ];
        }
    }
}
