<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    public function galaxia()
    {
        return $this->belongsTo('App\Galaxia');
    }

    public function planetas()
    {
        return $this->hasMany('App\Planeta');
    }
}
