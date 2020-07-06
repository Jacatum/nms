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
            'farm' => 'Sucata Reciclavel',
            'portal' => 0,
            'sentinela' => '',
            'tempestade' => 1,
            'agua' => 0,
            'tipo_id' => 1,
            'clima_id' => 1,
            'Sistema_id' => 1
        ]);

        DB::table('planetas')->insert([
            'nome' => 'Xablau',
            'farm' => 'Ossos Antigos',
            'portal' => 1,
            'sentinela' => '',
            'tempestade' => 0,
            'agua' => 1,
            'tipo_id' => 3,
            'clima_id' => 2,
            'Sistema_id' => 2
        ]);
    }
}
