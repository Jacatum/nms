<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GalaxiasSeeder::class);
        $this->call(ConflitosSeeder::class);
        $this->call(RacasSeeder::class);
        $this->call(SistemasSeeder::class);
        $this->call(MineraisSeeder::class);
        $this->call(BiologicosSeeder::class);
        $this->call(TiposSeeder::class);
        $this->call(ClimasSeeder::class);
        $this->call(PlanetasSeeder::class);
    }
}
