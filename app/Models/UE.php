<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UE extends Model
{
    use HasFactory;

    // Si les colonnes de votre table ne suivent pas les conventions de nommage
    // vous pouvez définir explicitement les champs autorisés à être remplis
    protected $table = 'u_e_s'; // Le nom de la table dans la base de données
    protected $fillable = ['code', 'nom', 'credits_ects', 'semestre'];
}
