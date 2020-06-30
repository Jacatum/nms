<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planeta extends Model
{
    public function sistema()
    {
        return $this->belongsTo('App\Sistema');
    }

    public function clima()
    {
        return $this->belongsTo('App\Clima');
    }

    public function tipo()
    {
        return $this->belongsTo('App\Tipo');
    }

    public function minerais()
    {
        return $this->belongsToMany('App\Mineral', 'planetas_minerais');
    }

    public function biologicos()
    {
        return $this->belongsToMany('App\Biologico', 'planetas_biologicos');
    }


}
