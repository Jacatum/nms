<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mineral extends Model
{
    protected $table = 'minerais';

    public function planetas()
    {
        return $this->belongsToMany('App\Planeta', 'planetas_minerais');
    }
}
