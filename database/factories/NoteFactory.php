<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    protected $model = Note::class;

    public function definition()
    {
        return [
            'etudiant_nom' => $this->faker->lastName,
            'etudiant_prenom' => $this->faker->firstName,
            'annee_etude' => '2024',
            'filiere' => 'Informatique',
            'credit' => $this->faker->numberBetween(1, 10),
            'semestre' => $this->faker->randomElement(['S1', 'S2']),
            'coefficient' => $this->faker->numberBetween(1, 5),
            'date_evaluation' => $this->faker->date(),
            'note' => $this->faker->randomFloat(2, 0, 20),
            'session' => $this->faker->randomElement(['normale', 'rattrapage']),
        ];
    }
}
