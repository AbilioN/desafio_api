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
        $this->call(ClienteSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(CidadeSeeder::class);
        $this->call(EventoSeeder::class);
        $this->call(ZonaSeeder::class);
        $this->call(TipoSeeder::class);
        $this->call(IngressoSeeder::class);

    }
}
