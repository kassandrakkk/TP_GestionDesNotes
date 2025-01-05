<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UE>
 */
class UEFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->word,
            'intitule' => $this->faker->sentence,
            'credits_ects' => $this->faker->numberBetween(1, 10),
            'semestre' => $this->faker->numberBetween(1, 2),
        ];
    }
}
