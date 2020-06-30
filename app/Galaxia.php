<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galaxia extends Model
{
    public function sistemas() 
    {
        return $this->hasMany('App\Sistema');
    }
}
