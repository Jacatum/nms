<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planetas')->insert([
            'nome' => 'Tuni VX',
            'farm' => 'Sucata Recuperavel',
            'portal' => 0,
            'sentinela' => '',
            'tempestade' => 1,
            'agua' => 0,
            'tipo_id' => 1,
            'clima_id' => 1,
            'Sistema_id' => 1
        ]);
    }
}
