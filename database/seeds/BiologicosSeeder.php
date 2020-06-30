<?php

use Illuminate\Database\Seeder;

class BiologicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biologicos')->insert(['nome' => 'Carbono']);
    }
}
