<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    /** @use HasFactory<\Database\Factories\ExamenFactory> */
    use HasFactory;
    protected $fillable = [
        'date_examen',
        'heure_debut',
        'heure_fin',
        'status',
        
    ];
    public function apprenants()
    {
        return $this->belongsToMany(Apprenant::class)
                ->withPivot('niveau', 'annee');
    }
    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }

}
