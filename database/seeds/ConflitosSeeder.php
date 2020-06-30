<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConflitosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conflitos')->insert(['nome' => 'Inofensivo']);
        DB::table('conflitos')->insert(['nome' => 'Esporadico']);
        DB::table('conflitos')->insert(['nome' => 'Intermitente']);
        DB::table('conflitos')->insert(['nome' => 'Medio']);
        DB::table('conflitos')->insert(['nome' => 'Brando']);
        DB::table('conflitos')->insert(['nome' => 'Ameno']);
        DB::table('conflitos')->insert(['nome' => 'Sem lei']);
        DB::table('conflitos')->insert(['nome' => 'Tenso']);
        DB::table('conflitos')->insert(['nome' => 'Tranquilo']);
        DB::table('conflitos')->insert(['nome' => 'Anarquico']);
        DB::table('conflitos')->insert(['nome' => 'Calmo']);
        DB::table('conflitos')->insert(['nome' => 'Instavel']);
    }
}
