<?php

use Illuminate\Database\Seeder;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zonas')->insert([
            [
                'zona' => 'norte'
            ],
            [
                'zona' => 'leste'
            ],
            [
                'zona' => 'sul'
            ],
            [
                'zona' => 'oeste'
            ]
        ]);
    }
}
