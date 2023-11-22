<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
            'phone' => fake()->text(),
            'email' => fake()->email(),
            'email_verified_at' => fake()->boolean(),
            'password' => fake()->password(),
            'address' => fake()->address(),
            'avatar' => fake()->imageUrl(),
            'rememberToken' => fake()->text(),
        ];
    }
}
