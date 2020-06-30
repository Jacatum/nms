<?php

use Illuminate\Database\Seeder;

class ClimasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nome')->insert(['nome' => 'Atmosfera aquecida']);
    }
}
