<?php

use Illuminate\Database\Seeder;

class IngressoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingressos')->insert([
            [
                'evento_id' => 1,
                'zona_id' => 1,
                'tipo_id' => 1,
                'preco' => 124
            ],

            [
                'evento_id' => 1,
                'zona_id' => 1,
                'tipo_id' => 1,
                'preco' => 110
            ],

            [
                'evento_id' => 1,
                'zona_id' => 2,
                'tipo_id' => 1,
                'preco' => 130
            ],
            [
                'evento_id' => 1,
                'zona_id' => 2,
                'tipo_id' => 1,
                'preco' => 110
            ],
            [
                'evento_id' => 1,
                'zona_id' => 3,
                'tipo_id' => 2,
                'preco' => 65
            ],
            [
                'evento_id' => 1,
                'zona_id' => 3,
                'tipo_id' => 2,
                'preco' => 65
            ],

            [
                'evento_id' => 1,
                'zona_id' => 3,
                'tipo_id' => 2,
                'preco' => 65
            ],

            [
                'evento_id' => 2,
                'zona_id' => 1,
                'tipo_id' => 2,
                'preco' => 65
            ],

            [
                'evento_id' => 2,
                'zona_id' => 1,
                'tipo_id' => 1,
                'preco' => 140
            ],

            [
                'evento_id' => 2,
                'zona_id' => 4,
                'tipo_id' => 2,
                'preco' => 65
            ],

            [
                'evento_id' => 2,
                'zona_id' => 4,
                'tipo_id' => 1,
                'preco' => 145
            ],

            [
                'evento_id' => 2,
                'zona_id' => 4,
                'tipo_id' => 1,
                'preco' => 180
            ],
            [
                'evento_id' => 2,
                'zona_id' => 4,
                'tipo_id' => 2,
                'preco' => 90
            ],
            [
                'evento_id' => 2,
                'zona_id' => 4,
                'tipo_id' => 1,
                'preco' => 180
            ],

        ]);    
    }
}
