<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conflito extends Model
{
    public function sistemas()
    {
        return $this->hasMany('App\Sistema');
    }
}
