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
        $this->call([
            GalaxiasSeeder::class,
            RacasSeeder::class,
            ConflitosSeeder::class,
            SistemasSeeder::class,
            MineraisSeeder::class,
            BiologicosSeeder::class,
            TiposSeeder::class,
            ClimasSeeder::class,
            PlanetasSeeder::class,
            PlanetasMineriasSeeder::class,
            PlanetasBiologicosSeeder::class
        ]);
    }
}
