<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Ues extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    
    protected $fillable =[
        'code',
        'nom',
        'credits_ects',
        'semestre'
    ];

    public function ECs() {
        
    }
}
