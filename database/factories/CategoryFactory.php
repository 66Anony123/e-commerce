<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    public function definition(): array
    {
        $name = fake()->name();
        return [
            'name' => $name,
            'slog' => str()->slug($name),
            'description'=>fake()->text(),
            'image_url'=>fake()->imageUrl()
        ];
    }
    
}
