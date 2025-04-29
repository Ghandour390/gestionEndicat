<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Etudier extends Pivot
{
   protected $fillable = [
        'niveau',
        'annee',
        'apprenant_id',
        'classe_id'
    ];
}
