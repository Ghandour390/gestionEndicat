<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\returnArgument;

class Cours extends Model
{
    /** @use HasFactory<\Database\Factories\CoursFactory> */
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'couver'
    ];

    public function classe() {
        return $this->belongsTo(Classe::class);
    }

    public function examens()
    {
        return $this->hasMany(Examen::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
    public function ressources(){
        return $this->hasMany(Ressource::class);
    }
}
