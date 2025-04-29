<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends User
{
    /** @use HasFactory<\Database\Factories\ApprenantFactory> */
    use HasFactory;
    protected $fillable = [
        'numerodDeBdge',
       
    ];

    public function classe()
    {
        return $this->belongsToMany(Classe::class, 'etudier')
            ->withPivot('niveau', 'annee');
    }
    public function Examens(){
        return $this->BelongsToMany(Examen::class,'passrs')
        ->withPivot('note','date');
    }
}
