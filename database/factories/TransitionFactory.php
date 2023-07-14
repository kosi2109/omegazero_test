<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['income', 'expense']),
            'title' => $this->faker->title,
            'amount' => $this->faker->randomDigit,
            'description' => $this->faker->sentence,
        ];
    }
}
