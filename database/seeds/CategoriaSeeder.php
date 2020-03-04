<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            [
                'categoria' => 'evento'
            ],
            [
                'categoria' => 'jogo'
            ],
            [
                'categoria' => 'show'
            ],
        ]);
    }
}
