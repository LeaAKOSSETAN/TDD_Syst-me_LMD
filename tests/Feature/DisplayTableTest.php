<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\UE;
use App\Models\Note;

class DisplayTableTest extends TestCase
{
    use RefreshDatabase; // Nettoie la base de données après chaque test.

    /** @test */
    public function it_displays_the_table_of_ues()
    {
        // Créer des données factices
        UE::factory()->create([
            'code' => 'UE11',
            'nom' => 'Programmation Web',
            'credits_ects' => 6,
            'semestre' => 1,
        ]);

        // Appeler la route
        $response = $this->get(route('ues.index')); // Assurez-vous que la route existe.

        // Vérifier la réponse
        $response->assertStatus(200);
        $response->assertSee('Programmation Web');
        $response->assertSee('6');
        $response->assertSee('1');
    }

    /** @test */
    public function it_displays_the_table_of_notes()
    {
        // Créer des données factices
        Note::factory()->create([
            'etudiant_nom' => 'John Doe',
            'note' => 15,
            'session' => 'normale',
        ]);

        // Appeler la route
        $response = $this->get(route('notes.index')); // Assurez-vous que la route existe.

        // Vérifier la réponse
        $response->assertStatus(200);
        $response->assertSee('John Doe');
        $response->assertSee('15');
        $response->assertSee('normale');
    }
}
