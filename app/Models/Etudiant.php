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
}
