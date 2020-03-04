<?php

use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos')->insert([
            [
                'name' => 'Abc x America',
                'descricao' => 'Classico do estado decidindo classificacao para a serie B',
                'categoria_id' => 2,
                'data_evento' => '2020-03-22',
                'cidade_id' => 1
            ],
            [
                'name' => 'Show do roberto carlos',
                'descricao' => 'Grandes classicos do rei',
                'categoria_id' => 3,
                'data_evento' => '2020-04-21',
                'cidade_id' => 5
            ],

            [
                'name' => 'Gremio x Corinthians',
                'descricao' => 'Jogo decisivo para o brasileirao serie A',
                'categoria_id' => 2,
                'data_evento' => '2020-04-14',
                'cidade_id' => 4
            ],
            [
                'name' => 'DevOps Trainning',
                'descricao' => 'Maior evento multiempresarial de TI do estado do RN',
                'categoria_id' => 1,
                'data_evento' => '2020-04-08',
                'cidade_id' => 1
            ],

            [
                'name' => 'Saga entrentenimento ',
                'descricao' => 'Maior evento nerd&geek do nordeste',
                'categoria_id' => 1,
                'data_evento' => '2020-06-07',
                'cidade_id' => 1
            ],

            [
                'name' => 'U2 Brazillian Tour',
                'descricao' => 'Show unico da banda inglesa no Brasil',
                'categoria_id' => 3,
                'data_evento' => '2020-05-28',
                'cidade_id' => 3
            ],
            [
                'name' => 'Flamengo x Fluminense',
                'descricao' => 'Valendo a lideranca da 28ª rodada do brasileirao',
                'categoria_id' => 2,
                'data_evento' => '2020-04-02',
                'cidade_id' => 5
            ],

            [
                'name' => 'Sao paulo x Palmeiras',
                'descricao' => 'Mais uma rivalidade paulista em campo',
                'categoria_id' => 2,
                'data_evento' => '2020-03-09',
                'cidade_id' => 4
            ],
            [
                'name' => 'Atletico MG x Guara',
                'descricao' => 'Valendo classificacao para a libertadores',
                'categoria_id' => 2,
                'data_evento' => '2020-05-23',
                'cidade_id' => 3
            ],
            [
                'name' => 'The wall',
                'descricao' => 'O maior espetaculo multimidia da terra agora no Brasil agora no RJ',
                'categoria_id' => 3,
                'data_evento' => '2020-06-12',
                'cidade_id' => 5
            ],
            [
                'name' => 'The wall',
                'descricao' => 'O maior espetaculo multimidia da terra agora no Brasil agora em SP',
                'categoria_id' => 3,
                'data_evento' => '2020-06-17',
                'cidade_id' => 4
            ],
            [
                'name' => 'Vasco x Botafogo',
                'descricao' => 'Mais um classico carioca valendo quartas de finais no campeonato estadual',
                'categoria_id' => 2,
                'data_evento' => '2020-07-21',
                'cidade_id' => 5
            ],
            [
                'name' => 'David Gilmour South America Tour 2020',
                'descricao' => 'Os grandes sucessos do pink floyd num show inesquecivel agora no RJ ',
                'categoria_id' => 3,
                'data_evento' => '2020-08-12',
                'cidade_id' => 5
            ],
            [
                'name' => 'David Gilmour South America Tour 2020',
                'descricao' => 'Os grandes sucessos do pink floyd num show inesquecivel agora em SP ',
                'categoria_id' => 3,
                'data_evento' => '2020-08-08',
                'cidade_id' => 4
            ],

            [
                'name' => 'SpottedFest',
                'descricao' => 'Maior micareta universitaria do nordeste esta devolta!',
                'categoria_id' => 3,
                'data_evento' => '2020-12-22',
                'cidade_id' => 1
            ],
          
            [
                'name' => 'Flamengo x Atletico MG',
                'descricao' => 'Duelo de gigantes valendo a lideranca do brasileirao',
                'categoria_id' => 2,
                'data_evento' => '2020-05-23',
                'cidade_id' => 5
            ]
        ]);
    }
}
