<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiologicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biologicos')->insert(['nome' => 'Mofo']);
        DB::table('biologicos')->insert(['nome' => 'Cristal da geada']);
        DB::table('biologicos')->insert(['nome' => 'Raiz Gama']);
        DB::table('biologicos')->insert(['nome' => 'Polpa de Cacto']);
        DB::table('biologicos')->insert(['nome' => 'Solânio']);
        DB::table('biologicos')->insert(['nome' => 'Bulbo Estelar']);
        DB::table('biologicos')->insert(['nome' => 'Bulbo de Abóbora']);
        DB::table('biologicos')->insert(['nome' => 'Bolsa de Alga']);
        DB::table('biologicos')->insert(['nome' => 'Faécio']);
        DB::table('biologicos')->insert(['nome' => 'Gosma Residual']);
        DB::table('biologicos')->insert(['nome' => 'Gosma Viva']);
        DB::table('biologicos')->insert(['nome' => 'Fluidos Viscosos']);
        DB::table('biologicos')->insert(['nome' => 'Mofo Incontrolável']);
        DB::table('biologicos')->insert(['nome' => 'Mordite']);
    }
}
