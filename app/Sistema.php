<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    public function galaxia()
    {
        return $this->belongsTo('App\Galaxia');
    }

    public function conflito()
    {
        return $this->belongsTo('App\Conflito');
    }

    public function raca()
    {
        return $this->belongsTo('App\Raca');
    }

    public function planetas()
    {
        return $this->hasMany('App\Planeta');
    }
}
