<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    public function definition()
    {
        return [
            'title' => fake()->text(),
            'image' => fake()->imageUrl(),
            'description' => fake()->realText(2000),
            'price' => fake()->randomFloat(2, 2, 5),
            'created_at' => now(),
            'updated_at' => now(),
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}