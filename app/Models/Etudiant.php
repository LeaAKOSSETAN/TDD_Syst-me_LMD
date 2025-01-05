<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Etudiant extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    
    protected $fillable =[
        'numero_etudiant',
        'nom',
        'prenom',
        'niveau',
    ];

    public function note() {
        return $this->hasMany(Note::class);
    }
    
    public function calculerMoyenne()
    {
        $notes = $this->notes()->with('ec')->get();
        $total = 0;
        $totalCoefficients = 0;

        foreach ($notes as $note) {
            $ec = $note->ec;
            $total += $note->valeur * $ec->coefficient;
            $totalCoefficients += $ec->coefficient;
        }

        return $totalCoefficients > 0 ? $total / $totalCoefficients : 0; // Evite la division par zéro
    }

}
