<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero_etudiant' => $this->faker->unique()->numerify('ETU#####'),
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'niveau' => $this->faker->randomElement(['L1', 'L2', 'L3']),
        ];
    }
}
