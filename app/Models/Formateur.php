<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends User
{
    /** @use HasFactory<\Database\Factories\FormateurFactory> */
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'dateNaissance',
        'photo',
        'phone',
        'email',
        'password',
        'specialite',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    
    public function classes(){
        return $this->belongsToMany(Classe::class);
    }
}
