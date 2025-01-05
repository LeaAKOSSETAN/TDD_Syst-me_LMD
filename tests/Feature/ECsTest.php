<?php

namespace Tests\Feature;

use App\Models\ECs;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ECsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    
    public function test_creation_d_un_ec_avec_coefficient()
    {
        $ec = ECs::factory()->create([
            'code' => 'EC11',
            'nom' => 'Algorithmique',
            'coefficient' => 3,
        ]);

        $this->assertDatabaseHas('ec', ['code' => 'EC11']);
    }
    
    public function test_verification_du_rattachement_a_une_ue()
    {
        $ue = ECs::factory()->create();
        $ec = ECs::factory()->create(['ue_id' => $ue->id]);

        $this->assertEquals($ue->id, $ec->ue_id);
    }

    public function test_modification_d_un_ec()
    {
        $ec = ECs::factory()->create(['nom' => 'Programmation']);
        $ec->update(['nom' => 'Programmation Avancée']);

        $this->assertEquals('Programmation Avancée', $ec->nom);
    }

    public function test_validation_du_coefficient()
    {
        $ec = ECs::factory()->make(['coefficient' => 4]);

        $this->assertGreaterThanOrEqual(1, $ec->coefficient);
        $this->assertLessThanOrEqual(5, $ec->coefficient);
    }

    public function test_suppression_d_un_ec()
    {
        $ec = ECs::factory()->create();

        $ec->delete();
        $this->assertDatabaseMissing('ec', ['id' => $ec->id]); 

    }
    
}
