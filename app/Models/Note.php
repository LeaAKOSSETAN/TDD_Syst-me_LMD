<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // Déclarez les colonnes qui peuvent être remplies via un formulaire
    protected $fillable = [
        'etudiant_nom',
        'etudiant_prenom',
        'annee_etude',
        'filiere',
        'credit',
        'semestre',
        'coefficient',
        'date_evaluation',
        'note',
        'session',
    ];
}
