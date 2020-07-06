<?php

use Illuminate\Database\Seeder;

class PlanetasMineriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planetas_minerais')->insert([
            'mineral_id' => '1',
            'planeta_id' => '1',
        ]);

        DB::table('planetas_minerais')->insert([
            'mineral_id' => '2',
            'planeta_id' => '1',
        ]);

        DB::table('planetas_minerais')->insert([
            'mineral_id' => '3',
            'planeta_id' => '1',
        ]);

        DB::table('planetas_minerais')->insert([
            'mineral_id' => '4',
            'planeta_id' => '2',
        ]);

        DB::table('planetas_minerais')->insert([
            'mineral_id' => '5',
            'planeta_id' => '2',
        ]);

        DB::table('planetas_minerais')->insert([
            'mineral_id' => '6',
            'planeta_id' => '2',
        ]);
    }
}
