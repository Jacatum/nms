<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sistema;
use Illuminate\Support\Facades\DB;

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
        'sistema_id'
    ];

    public static function make(array $attributes):Planeta
    {
        $planeta = new Planeta($attributes);

        
        return $planeta;
    }

    /*
    public function scopeSearch($query, array $params)
    {

        foreach ($params as $param_name => $param_value) 
        {
            switch ($param_name) 
            {
                case 'nome':
                    $query->where($param_name,'LIKE',"%$param_value%");
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
    */

    public function scopeSearch($query, array $dados)
    {
            if(isset($dados['nome'])) {
                $query->where('nome', 'LIKE', '%' . $dados['nome'] . '%');
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
                $query->where('tipo_id', $dados['tipo']);
            }
            
            if(isset($dados['clima'])) {
                $query->where('clima_id', $dados['clima']);
            }
            
            if(isset($dados['portal'])) {
                $query->where('portal', $dados['portal']);
            }
            
            if(isset($dados['sol'])) {
                $sol = $dados['sol'];
                $query->whereHas('sistema', function($query) use($sol) {
                    $query->where('sol', $sol);
                });
            }

            if(isset($dados['estacao'])) {
                $estacao = $dados['estacao'];
                $query->whereHas('sistema', function($query) use($estacao) {
                    $query->where('estacao', $estacao);
                });
            }

            if(isset($dados['raca'])) {
                $raca = $dados['raca'];
                $query->whereHas('sistema', function($query) use($raca) {
                    $query->where('raca_id', $raca);
                });
            }

            if(isset($dados['conflito'])) {
                $conflito = $dados['conflito'];
                $query->whereHas('sistema', function($query) use($conflito) {
                    $query->where('conflito_id', $conflito);
                });
            }

            if(isset($dados['galaxia'])) {
                $galaxia = $dados['galaxia'];
                $query->whereHas('sistema.galaxia', function($query) use($galaxia) {
                    $query->where('id', $galaxia);
                });
            }

            if($dados['mineral'][0] !== null) {
                foreach($dados['mineral'] as $mi) {
                $query->whereHas('minerais', function($query) use($mi) {
                        $query->where('id', $mi);
                    });
                }
            }
            
            if($dados['biologico'][0] !== null) {
                foreach($dados['biologico'] as $bi) {
                $query->whereHas('biologicos', function($query) use($bi) {
                    $query->where('id', $bi);
                    });
                }
            }
            
            return $query;
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