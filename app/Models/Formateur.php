<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends User
{
    /** @use HasFactory<\Database\Factories\FormateurFactory> */
    use HasFactory;
    protected $fillable = [
        'specialite',
    ];

    protected $casts = [
        'specialite' => Specialite::class,
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    
    public function classes(){
        return $this->belongsToMany(Classe::class);
    }
}
