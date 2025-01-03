<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UEs>
 */
class UEsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => 'UE' . $this->faker->unique()->numerify('##'),
            'nom' => $this->faker->words(3, true),
            'credits_ects' => $this->faker->numberBetween(1, 30),
            'semestre' => $this->faker->numberBetween(1, 6),
        ];
    }
}
