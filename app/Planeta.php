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
    
    protected $fillable = [
        'agua',
        'farm',
        'nome',
        'sentinela',
        'tempestade',
        'tipo_id',
        'clima_id',
        'portal',
    ];

    public static function make(array $attributes):Planeta
    {
        $planeta = new Planeta($attributes);
        return $planeta;
    }

    public function scopeSearch($query, array $params)
    {
        #dd($params);
        foreach ($params as $param_name => $param_value) {
            switch ($param_name) {
                case 'nome':
                    $query->where($param_name,'LIKE',"%$param_value%");
                    break;
                case 'galaxia_id':
                    $query->where($param_name,$param_value);
                    break;
                default:
                    if($param_value !== null) {
                        $query->where($param_name,$param_value);  
                    }
                    break;
            }
        }
        return $query;
    }    
    
    public static function fullSearch($dados)
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