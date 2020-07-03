<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Planeta;

class Mineral extends Model
{
    protected $table = 'minerais';

    public function planetas()
    {
        return $this->belongsToMany(Planeta::class, 'planetas_minerais');
    }
}
