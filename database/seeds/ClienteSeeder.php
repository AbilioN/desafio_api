<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            [
                'name' => 'cliente01',
                'email' => 'cliente01@gmail.com',
                'password' => bcrypt('cliente123')

            ],
            [
                'name' => 'cliente02',
                'email' => 'cliente02@gmail.com',
                'password' => bcrypt('cliente123')

            ],
            [
                'name' => 'cliente03',
                'email' => 'cliente03@gmail.com',
                'password' => bcrypt('cliente123')

            ],
        ]);
    }
}
