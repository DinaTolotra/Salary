<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User2>
 */
class User2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero' => $this->faker->numberBetween(100, 1000),
            'nom' => $this->faker->name(),
            'nbjour' => $this->faker->randomNumber(),
            'taux' => $this->faker->numberBetween(100, 10000),

        ];
    }
}
