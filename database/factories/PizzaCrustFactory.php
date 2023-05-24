<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PizzaCrust>
 */
class PizzaCrustFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pcrust_title' => fake()->unique()->name(),
            'pcrust_price' => fake()->numberBetween($min = 100, $max = 200),
            'pcrust_order' => fake()->randomDigit(),
            'pcrust_slug' => uniqid(),
        ];
    }
}
