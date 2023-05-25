<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PizzaSize>
 */
class PizzaSizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // return [
        //     'pcrust_title' => fake()->randomDigit()-> 'cm',
        //     'pcrust_price' => fake()->numberBetween($min = 100, $max = 200),
        //     'pcrust_order' => fake()->randomDigit(),
        //     'pcrust_slug' => uniqid(),
        // ];
    }
}
