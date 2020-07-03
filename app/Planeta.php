<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sistema;

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
    
    public static function make(array $attributes):Planeta
    {
        
        #$planeta = new Planeta($attributes);
        $planeta = new Planeta();
        $planeta->nome = $attributes['nome'];
        $planeta->farm = $attributes['farm'];
        $planeta->sentinela = $attributes['sentinela'];
        $planeta->tempestade = $attributes['tempestade'];
        $planeta->agua = $attributes['agua'];
        $planeta->portal = $attributes['portal'];
        $planeta->sistema()->associate($attributes['sistema']);
        $planeta->tipo()->associate($attributes['tipo']);
        $planeta->clima()->associate($attributes['clima']);
    
        return $planeta;
        
        $mineral = $attributes(['mineral']);
        if (isset($mineral))
        {
            foreach ($mineral as $mi)
            {
                $planeta->minerais()->attach($mi);
            }
        }
    
        $biologico = $attributes(['biologico']);
        if (isset($biologico))
        {
            foreach ($biologico as $bi)
            {
                $planeta->biologicos()->attach($bi);
            }
        }
    
    }

    public static function search($dados)
    {
        $resultado = Planeta::where(function($query) use($dados) {

            if(isset($dados['nome'])) {
                $query->where('nome', 'LIKE', '%' . $dados['nome'] . '%');
            }

            if(isset($dados['galaxia'])) {
                $query->where('galaxia_id', $dados['galaxia']);
            }

            if(isset($dados['sistema'])) {
                $query->where('sistema_id', $dados['sistema']);
            }

            if(isset($dados['farm'])) {
                $query->where('farm', $dados['farm']);
            }

            if(isset($dados['sentinela'])) {
                $query->where('sentinela', $dados['sentinela']);
            }

            if(isset($dados['tempestade'])) {
                $query->where('tempestade', $dados['tempestade']);
            }

            if(isset($dados['agua'])) {
                $query->where('agua', $dados['agua']);
            }

            if(isset($dados['tipo'])) {
                $query->where('tipo', $dados['tipo']);
            }

            if(isset($dados['clima'])) {
                $query->where('clima', $dados['clima']);
            }

            if(isset($dados['portal'])) {
                $query->where('portal', $dados['portal']);
            }
            /*
            if(isset($dados['mineral'])) {
                foreach($dados['mineral'] as $mi) {
                    $query->where('mineral', $mi);
                }
            }

            if(isset($dados['biologico'])) {
                foreach($dados['biologico'] as $bi) {
                    $query->where('biologico', $bi);
                }
            }
            */
        })->get();
        return $resultado;
    }
    
}

// public function __construct($attributes)
// {
    //     parent::__construct($attributes);
// }

/**
 * 
 * @param string $nome
 * @param int $tamanho
 * @param Array $minerais
 * @param int|object $sistema
 */
// public static function make(string $nome, int $tamanho, Array $minerais, $sistema) {