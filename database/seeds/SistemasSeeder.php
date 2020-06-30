<?php

use App\Conflito;
use Illuminate\Database\Seeder;

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
            'conflito_id' => 1,
            'raca_id' => 0,
            'sol' => 'Amarelo',
            'num_planetas' => 5,
            'estacao' => 1,
            'galaxia_id' => 0
            ]);
    }
}
