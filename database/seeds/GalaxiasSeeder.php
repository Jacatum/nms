<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalaxiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galaxias')->insert(['nome' => 'Euclid']);
    }
}
