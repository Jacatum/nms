<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClimasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        DB::table('climas')->insert(['nome' => 'Atmosfera aquecida']);
=======
        DB::table('Clima')->insert(['nome' => 'Quente']);
        DB::table('Clima')->insert(['nome' => 'Frio']);
        DB::table('Clima')->insert(['nome' => 'Radioativo']);
        DB::table('Clima')->insert(['nome' => 'Toxico']);
>>>>>>> a55c802edc6739c75108ac516d27f53a0718b716
    }
}
