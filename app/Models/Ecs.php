<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ECs extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    
    protected $fillable =[
        'code',
        'nom',
        'coefficient',
        'ue_id'
    ];

    public function ues() {
        return $this->belongsTo(UEs::class);
    }

    public function notes() {
        return $this->hasMany(Note::class);
    }
}
