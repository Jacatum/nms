<?php

use Illuminate\Database\Seeder;

class ConflitosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conflitos')->insert(['nome' => '1- Baixo']);
        DB::table('conflitos')->insert(['nome' => '2- Medio']);
        DB::table('conflitos')->insert(['nome' => '3- Alto']);
    }
}
