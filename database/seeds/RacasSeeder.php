<?php

use Illuminate\Database\Seeder;

class RacasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('racas')->insert(['nome' => 'Gek']);
    }
}
