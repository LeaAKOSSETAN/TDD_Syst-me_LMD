<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Note extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    
    // Déclarez les colonnes qui peuvent être remplies via un formulaire
    protected $fillable =[
        'etudiant_id',
        'ec_id',
        'note',
        'session',
        'date_evaluation',
        'etudiant_nom',
        'etudiant_prenom',
        'annee_etude',
        'filiere',
        'credit',
        'semestre',
        'coefficient',
    ];

    public function etudiant() {
        return $this->belongsTo(Etudiant::class);
    }

    public function ecs() {
        return $this->belongsTo(ECs::class);
    }

}
