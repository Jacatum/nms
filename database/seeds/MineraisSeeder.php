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
        DB::table('minerais')->insert(['nome' => 'Cobalto Ionizado']);
        DB::table('minerais')->insert(['nome' => 'Cobre']);
        DB::table('minerais')->insert(['nome' => 'Cobre Ativado']);
        DB::table('minerais')->insert(['nome' => 'Urânio']);
        DB::table('minerais')->insert(['nome' => 'Pó de Ferrita']);
        DB::table('minerais')->insert(['nome' => 'Ferrita Magnetizada']);
        DB::table('minerais')->insert(['nome' => 'Ferrita Pura']);
        DB::table('minerais')->insert(['nome' => 'Cádmio']);
        DB::table('minerais')->insert(['nome' => 'Cádmio Ativado']);
        DB::table('minerais')->insert(["nome" => 'Carbono']);
        DB::table('minerais')->insert(["nome" => 'Carbono Condensado']);
        DB::table('minerais')->insert(["nome" => 'Oxigênio']);
        DB::table('minerais')->insert(["nome" => 'Di-Hidrogênio']);
        DB::table('minerais')->insert(["nome" => 'Trítio']);
        DB::table('minerais')->insert(["nome" => 'Platina']);
        DB::table('minerais')->insert(["nome" => 'Iridio']);
        DB::table('minerais')->insert(["nome" => 'Ouro']);
        DB::table('minerais')->insert(["nome" => 'Pó de Silicato']);
        DB::table('minerais')->insert(["nome" => 'Sódio']);
        DB::table('minerais')->insert(["nome" => 'Nitrato de Sódio']);
        DB::table('minerais')->insert(['nome' => 'Sal']);
        DB::table('minerais')->insert(['nome' => 'Cloro']);
        DB::table('minerais')->insert(['nome' => 'Citofosfato']);
        DB::table('minerais')->insert(['nome' => 'Emeril']);
        DB::table('minerais')->insert(['nome' => 'Emeril Ativado']);
        DB::table('minerais')->insert(['nome' => 'Índio']);
        DB::table('minerais')->insert(['nome' => 'ìndio Ativado']);
        DB::table('minerais')->insert(['nome' => 'Metal Cromático']);
        DB::table('minerais')->insert(['nome' => 'Parafínio']);
        DB::table('minerais')->insert(['nome' => 'Pirita']);
        DB::table('minerais')->insert(['nome' => 'Amônia']);
        DB::table('minerais')->insert(['nome' => 'Dioxita']);
        DB::table('minerais')->insert(['nome' => 'Mordita']);
        DB::table('minerais')->insert(['nome' => 'Púgneo']);
        DB::table('minerais')->insert(['nome' => 'Prata']);
        DB::table('minerais')->insert(['nome' => 'Sulfurino']);
        DB::table('minerais')->insert(['nome' => 'Radônio']);
        DB::table('minerais')->insert(['nome' => 'Nitrogênio']);
        DB::table('minerais')->insert(['nome' => 'Metal Enferrujado']);
        DB::table('minerais')->insert(['nome' => 'Fósforo']);
        DB::table('minerais')->insert(['nome' => 'Deutério']);
    }
}
