<?php

use Illuminate\Database\Seeder;

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
            'tipo_id' => 0,
            'farm' => 'Sucata Recuperavel',
            'portal' => 0,
            'sentinela' => '',
            'tempestade' => 1,
            'agua' => 0,
            'clima_id' => 0,
            'sistema_id' = 0
        ]);
    }
}
