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
        DB::table('Clima')->insert(['nome' => 'Quente']);
        DB::table('Clima')->insert(['nome' => 'Frio']);
        DB::table('Clima')->insert(['nome' => 'Radioativo']);
        DB::table('Clima')->insert(['nome' => 'Toxico']);
    }
}
