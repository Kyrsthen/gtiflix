<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('atores')->insert(
            [
                [
                    'nome' => "Wagner Moura",
                    'descricao' => "Ator foda brasileiro",
                    'foto' => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Wagner_Moura_at_2025_Cannes_Red_Carpet_for_O_Agente_Secreto_2.jpg/800px-Wagner_Moura_at_2025_Cannes_Red_Carpet_for_O_Agente_Secreto_2.jpg",
                    'nacionalidade_id' => 1
                ],

                [
                    'nome' => "Megan Fox",
                    'descricao' => "Muito lembrada por atuar em Transformers",
                    'foto' => "https://img-21.ccm2.net/QfUguyLlZZiTIqiV_aB3CCzP7Yc=/31c47f545bb949de8ad0189d137aa97e/ccm-faq/1163639.jpgh",
                    'nacionalidade_id' => 2
                ],
                [
                    'nome' => "Chris Hemsworth",
                    'descricao' => "Ator australiano conhecido por interpretar Thor",
                    'foto' => "https://cdn.britannica.com/92/215392-050-96A4BC1D/Australian-actor-Chris-Hemsworth-2019.jpg",
                    'nacionalidade_id' => 3
                ],
                [
                    'nome' => "Xiao Zhan",
                    'descricao' => "Ator chinês famoso por seus papéis em dramas históricos",
                    'foto' => "https://i.mydramalist.com/5v7q04_5s.jpg",
                    'nacionalidade_id' => 5
                ],
            ]
        );
    }
}
