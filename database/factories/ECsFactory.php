<?php

namespace Database\Factories;

use App\Models\UEs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ECs>
 */
class ECsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => 'EC' . $this->faker->unique()->numerify('###'),
            'nom' => $this->faker->words(3, true),
            'coefficient' => $this->faker->numberBetween(1, 5),
            'ue_id' => UEs::factory(), 
        ];
    }
}
