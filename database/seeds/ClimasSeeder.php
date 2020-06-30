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
        DB::table('climas')->insert(['nome' => 'Quente']);
        DB::table('climas')->insert(['nome' => 'Frio']);
        DB::table('climas')->insert(['nome' => 'Radioativo']);
        DB::table('climas')->insert(['nome' => 'Toxico']);
    }
}
