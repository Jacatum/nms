<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clima extends Model
{
    public function planetas()
    {
        return $this->hasMany('App\Planeta');
    }
}
