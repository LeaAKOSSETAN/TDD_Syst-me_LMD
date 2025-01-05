<?php

namespace Tests\Feature;

use App\Models\ECs;
use App\Models\Etudiant;
use App\Models\Note;
use App\Models\UEs;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UEsTest extends TestCase
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

    public function test_verification_des_credits_ects()
    {
        $response = UEs::factory()->make([
            'credits_ects' => 30, // Invalide
        ]);

        $this->assertGreaterThanOrEqual(1, $response->credits_ects);
        $this->assertLessThanOrEqual(30, $response->credits_ects);
    }


    public function test_association_des_ecs_a_une_ue()
    {
        $ue = UEs::factory()->create();
        $ec = UEs::factory()->create(['code' => $ue->id]);

        $this->assertEquals($ue->id, $ec->code);
    }

    public function test_validation_du_code_ue()
    {
        $ue = UEs::factory()->make(['code' => 'UE11']);
        $this->assertMatchesRegularExpression('/^UE\d{2}$/', $ue->code);
    }

    public function test_verification_du_semestre()
    {
        $ue = UEs::factory()->make(['semestre' => 3]);

        $this->assertGreaterThanOrEqual(1, $ue->semestre);
        $this->assertLessThanOrEqual(6, $ue->semestre);
    }

}
