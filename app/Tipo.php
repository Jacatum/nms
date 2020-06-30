<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    public function planetas()
    {
        return $this->hasMany('App/Planeta');
    }
}
