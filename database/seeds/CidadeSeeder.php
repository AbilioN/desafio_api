<?php

use Illuminate\Database\Seeder;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cidades')->insert([
            [
                'cidade' => 'natal',
                'uf' => 'RN'
            ],
            [
                'cidade' => 'recife',
                'uf' => 'PE'
            ],
            [
                'cidade' => 'brasilia',
                'uf' => 'DF'
            ],
            [
                'cidade' => 'sao paulo',
                'uf' => 'SP'
            ],
            [
                'cidade' => 'rio de janeiro',
                'uf' => 'RJ'
            ],
        ]);
    }
}
