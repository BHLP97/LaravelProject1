<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SEO>
 */
class SEOFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'seo_keywords' => fake()->name(),
            'seo_title' => fake()->name(),
            'seo_description' => fake()->text(),
            'seo_script' => fake()->text(),
        ];
    }
}
