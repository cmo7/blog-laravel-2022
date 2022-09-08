<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(5, true),
            "slug" => $this->faker->slug(10, true),
            "content" => $this->faker->paragraph(20, true),
            "excerpt" => $this->faker->paragraph(2, false),
            "category_id" => \App\Models\Category::factory()->create(),
            "style" => random_int(1, 6),
        ];
    }
}
