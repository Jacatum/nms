<?php

use Illuminate\Database\Seeder;

class MineraisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('minerais')->insert(['nome' => 'Cobalto']);
        DB::table('minerais')->insert(['nome' => 'Cobre']);
        DB::table('minerais')->insert(['nome' => 'Cobre Ativado']);
        DB::table('minerais')->insert(['nome' => 'Uranio']);
        DB::table('minerais')->insert(['nome' => 'Ferrita']);
        DB::table('minerais')->insert(['nome' => 'Ferrita Magnetizada']);
        DB::table('minerais')->insert(['nome' => 'Cadmio']);
        DB::table('minerais')->insert(['nome' => 'Cadmio Ativado']);
    }
}
