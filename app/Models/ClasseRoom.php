<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasseRoom extends Model
{
    /** @use HasFactory<\Database\Factories\ClasseRoomFactory> */
    use HasFactory;
    protected $fillable = [
        'numero',
        'capacite',
    ];
    protected $table = 'classerooms';
    public function classes(){
        return $this->hasMany(Classe::class,'classeRoom_id');
    }
}
