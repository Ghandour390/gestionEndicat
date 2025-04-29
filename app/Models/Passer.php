<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;


class Passer extends Pivot
{
  protected  $fillable = [
        'note',
        'date_passage',
    ];
}
