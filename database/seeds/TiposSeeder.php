<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos')->insert(['nome' => 'Carbonizado(a)']);
        DB::table('tipos')->insert(['nome' => 'Laminado']);
        DB::table('tipos')->insert(['nome' => 'Desolado(a)']);
        DB::table('tipos')->insert(['nome' => 'Toxico(a)']);
        DB::table('tipos')->insert(['nome' => 'Putrefato(a)']);
        DB::table('tipos')->insert(['nome' => 'Vazio']);
        DB::table('tipos')->insert(['nome' => 'Tropical']);
        DB::table('tipos')->insert(['nome' => 'com Incidência Alta de Rádio']);
        DB::table('tipos')->insert(['nome' => 'Nuclear']);
        DB::table('tipos')->insert(['nome' => 'Fervente']);
        DB::table('tipos')->insert(['nome' => 'Paradisíaco(a)']);
        DB::table('tipos')->insert(['nome' => 'Escamoso(a)']);
        DB::table('tipos')->insert(['nome' => 'Tórrido(a)']);
        DB::table('tipos')->insert(['nome' => 'Ventoso(a)']);
        DB::table('tipos')->insert(['nome' => 'Verdejante']);
        DB::table('tipos')->insert(['nome' => 'Abandonado(a)']);
        DB::table('tipos')->insert(['nome' => 'Úmido(a)']);
        DB::table('tipos')->insert(['nome' => 'com Pilares']);
        DB::table('tipos')->insert(['nome' => 'Incompatível à vida']);
        DB::table('tipos')->insert(['nome' => 'Temperado(a)']);
        DB::table('tipos')->insert(['nome' => 'Invernal']);
        DB::table('tipos')->insert(['nome' => 'Escaldante']);
        DB::table('tipos')->insert(['nome' => 'Tostado(a)']);
        DB::table('tipos')->insert(['nome' => 'Pedra de Gelo']);
        DB::table('tipos')->insert(['nome' => 'Enregelante']);
        DB::table('tipos')->insert(['nome' => 'Tropical']);
        DB::table('tipos')->insert(['nome' => 'com Alta Radiação Gama']);
        DB::table('tipos')->insert(['nome' => 'Irradiado(a)']);
        DB::table('tipos')->insert(['nome' => 'de Alta Temperatura']);
        DB::table('tipos')->insert(['nome' => 'Arrasado(a)']);
        DB::table('tipos')->insert(['nome' => 'Nocivo(a)']);
        DB::table('tipos')->insert(['nome' => 'Sem Vida']);
        DB::table('tipos')->insert(['nome' => 'Radioativo(a)']);
        DB::table('tipos')->insert(['nome' => 'Azul Perdido']);
        DB::table('tipos')->insert(['nome' => 'Glacial']);
        DB::table('tipos')->insert(['nome' => 'em Expansão']);
        DB::table('tipos')->insert(['nome' => 'com Barbatana']);
        DB::table('tipos')->insert(['nome' => 'Ermo(a)']);
        DB::table('tipos')->insert(['nome' => 'Viçoso(a)']);
        DB::table('tipos')->insert(['nome' => 'Incandescente']);
        DB::table('tipos')->insert(['nome' => 'Coberto(a) de Conchas']);
        DB::table('tipos')->insert(['nome' => 'Flamejante']);
        DB::table('tipos')->insert(['nome' => 'Morto(a)']);
        DB::table('tipos')->insert(['nome' => 'Contaminado(a)']);
        DB::table('tipos')->insert(['nome' => 'Estilhaçado(a)']);
        DB::table('tipos')->insert(['nome' => 'Quente']);
        DB::table('tipos')->insert(['nome' => 'Borbulhante']);
        DB::table('tipos')->insert(['nome' => 'Fragmentado(a)']);
    }
}
