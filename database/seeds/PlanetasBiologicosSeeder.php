<?php

use Illuminate\Database\Seeder;

class PlanetasBiologicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planetas_biologicos')->insert([
            'biologico_id' => '1',
            'planeta_id' => '1',
        ]);

        DB::table('planetas_biologicos')->insert([
            'biologico_id' => '3',
            'planeta_id' => '2',
        ]);
    }
}
