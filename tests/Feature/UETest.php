<?php

namespace Tests\Feature;

use App\Models\ECs;
use App\Models\Etudiant;
use App\Models\Note;
use App\Models\UEs;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UETest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_creation_ue()
    {
        $ue = UEs::factory()->create([
            'code' => 'UE11',
            'nom' => 'Programmation Web',
            'credits_ects' => 6,
            'semestre' => 1
        ]);

        
        $this->assertDatabaseHas('ue', [
            'code' => $ue->code,
        ]);
    }

    public function test_validation_ue()
    {
        $ue = UEs::factory()->create();
        $etudiant = Etudiant::factory()->create();
        $ec = ECs::factory()->create(['ue_id' => $ue->id, 'coefficient' => 2]);

        Note::create([
            'etudiant_id' => $etudiant->id,
            'ec_id' => $ec->id,
            'note' => 12,
            'session' => 'normale'
        ]);

        $this->assertTrue($ue->estValidee($etudiant));
    }

}
