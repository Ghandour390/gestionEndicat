<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'note',
        'date_examen',
        'heure_debut',
        'heure_fin',
        'status',
        'cour_id'
    ];

    public function apprenants()
    {
        return $this->belongsToMany(Apprenant::class, 'passer_')
                ->withPivot('date_passage');
    }

    public function cour()
    {
        return $this->belongsTo(Cours::class, 'cour_id');
    }
}
