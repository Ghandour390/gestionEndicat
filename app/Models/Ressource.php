<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    /** @use HasFactory<\Database\Factories\RessourceFactory> */
    use HasFactory;
    
    protected $fillable = [
        'titre',
        'description',
        'cours_id'
    ];

    public function videos(){return $this->hasMany(Video::class);}
    public function documents(){return $this->hasMany(Document::class);}

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }
}
