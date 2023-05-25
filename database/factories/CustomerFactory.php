<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'card' => fake()->randomNumber(),
            'name' => fake()->name(),
            'phone' => fake()->randomNumber(),
            'payment_type' => "UPI",
        ];
    }
}
