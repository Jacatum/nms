<?php

use App\Sistema;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SistemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('sistemas')->insert([
            'nome' => 'Rulandrei',
            'sol' => 'Amarelo',
            'num_planetas' => 5,
            'estacao' => 1,
            'galaxia_id' => 1,
            'raca_id' => 1,
            'conflito_id' => 2
            ]);

        DB::table('sistemas')->insert([
            'nome' => 'Ietiiq Spur',
            'sol' => 'Azul',
            'num_planetas' => 5,
            'estacao' => 1,
            'galaxia_id' => 2,
            'raca_id' => 1,
            'conflito_id' => 2
            ]);
    }
}
