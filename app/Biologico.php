<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biologico extends Model
{
    public function planetas()
    {
        return $this->belongsToMany('App\Planeta', 'planetas_biologicos');
    }
}
