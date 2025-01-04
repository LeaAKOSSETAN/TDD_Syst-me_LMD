<?php

namespace Tests\Feature;

use App\Models\ECs;
use App\Models\Etudiant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NoteTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_note_est_bien_sauvegardee()
    {
        $etudiant = Etudiant::factory()->create();
        $ec = ECs::factory()->create();
    
        $response = $this->post('/notes', [
            'etudiant_id' => $etudiant->id,
            'ec_id' => $ec->id,
            'note' => 15,
            'session' => 'normale',
            'date_evaluation' => now(),
        ]);
    
        $response->assertRedirect('/notes/create');
        $this->assertDatabaseHas('notes', [
            'etudiant_id' => $etudiant->id,
            'note' => 15,
        ]);
    }
    
}
