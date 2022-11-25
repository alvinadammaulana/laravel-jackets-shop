<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jacket>
 */
class JacketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'type' => fake()->randomElement(['biker', 'denim', 'hooded']),
            'brand' => fake()->randomElement(['nike', 'adidas', 'supreme']),
            'color' => fake()->randomElement(['red', 'blue', 'yellow'])
        ];
    }
}