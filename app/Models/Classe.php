<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    /** @use HasFactory<\Database\Factories\ClasseFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'classroom_id'
    ];
    protected $table = 'classes';

    public function admin(){
        return $this->belongsTo(Admin::class);
    }
    public function apprenants(){
        return $this->belongsToMany(Apprenant::class, 'etudier')
            ->withPivot('niveau', 'annee');
    }
    public function classRoom(){
        return $this->belongsTo(ClasseRoom::class,'classeRoom_id');
    }

    public function formateurs(){
        return $this->belongsToMany(Formateur::class);
    }

    public function courses(){
        return $this->hasMany(Cours::class);
    }

}
