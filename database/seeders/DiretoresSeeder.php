<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiretoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diretores')->insert(
            [
                [
                    'nome' => "José Moura",
                    'descricao' => "Gosta de filmes de ação",
                    'nacionalidade_id' => 1
                ],

                [
                    'nome' => "Carlos Carlota",
                    'descricao' => "Diretor de muitos filmes famosos",
                    'nacionalidade_id' => 2
                ],
                [
                    'nome' => "Steven Spielberg",
                    'descricao' => "Um dos diretores mais famosos do mundo",
                    'nacionalidade_id' => 2
                ],
                [
                    'nome' => "Christopher Nolan",
                    'descricao' => "Conhecido por seus filmes complexos e inovadores",
                    'nacionalidade_id' => 4
                ],
                [
                    'nome' => "José Padilha",
                    'descricao' => "Diretor brasileiro conhecido por Tropa de Elite",
                    'nacionalidade_id' => 1 
                ],
                [
                    'nome' => "Michael Bay",
                    'descricao' => "Famoso por dirigir filmes de ação e efeitos especiais",
                    'nacionalidade_id' => 2
                ],
                [
                    'nome' => "China S. Lee",
                    'descricao' => "Diretor renomado de filmes de artes marciais",
                    'nacionalidade_id' => 5
                ],
            ]
        );
    }
}
