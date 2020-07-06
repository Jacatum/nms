<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raca extends Model
{
    public function sistemas()
    {
        return $this->hasMany('App\Sistema');
    }
}
