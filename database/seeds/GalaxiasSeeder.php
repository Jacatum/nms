<?php

use Illuminate\Database\Seeder;

class GalaxiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Galaxias')->insert(['nome' => 'Euclid']);
    }
}
