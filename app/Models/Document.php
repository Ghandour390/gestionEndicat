<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Ressource
{
    /** @use HasFactory<\Database\Factories\DocumentFactory> */
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'document',
    ];
    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }
}
       
   

