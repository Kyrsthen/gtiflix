<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Filmes')->insert(
            [
                [
                    'nome' => "Tropa de Elite",
                    'descricao' => "Filme brasileiro",
                    'capa' => "https://upload.wikimedia.org/wikipedia/pt/thumb/2/2a/TropaDeElitePoster.jpg/250px-TropaDeElitePoster.jpg",
                    'poster' => "https://upload.wikimedia.org/wikipedia/pt/thumb/2/2a/TropaDeElitePoster.jpg/250px-TropaDeElitePoster.jpg",
                    'diretores' => 5,
                    'classificacao' => 16,
                    'ano_lancamento' => 2007,
                    'produtora_id' => 6,
                ],

                [
                    'nome' => "Transformers",
                    'descricao' => "Robôs brigando",
                     'capa' => "https://upload.wikimedia.org/wikipedia/en/6/66/Transformers07.jpg",
                    'poster' => "https://upload.wikimedia.org/wikipedia/en/6/66/Transformers07.jpg",
                    'diretores' => 6,
                    'classificacao' => 12,
                    'ano_lancamento' => 2007,
                    'produtora_id' => 2,
                ],
                [
                    'nome' => "Interestellar",
                    'descricao' => "viagem espacial",
                    'capa' => "https://upload.wikimedia.org/wikipedia/pt/thumb/3/3a/Interstellar_Filme.png/250px-Interstellar_Filme.png",
                    'poster' => "https://upload.wikimedia.org/wikipedia/pt/thumb/3/3a/Interstellar_Filme.png/250px-Interstellar_Filme.png",
                    'diretores' => 4,
                    'classificacao' => 10,
                    'ano_lancamento' => 2014,
                    'produtora_id' => 5,
                ],
                [
                    'nome' => "Dinstia de jade",
                    'descricao' => "Filme de artes marciais",
                    'capa' => "https://upload.wikimedia.org/wikipedia/en/thumb/8/8e/Jade_Dynasty_%28%E8%AF%9B%E4%BB%99%29_2019_Movie_Poster.jpg/250px-Jade_Dynasty_%28%E8%AF%9B%E4%BB%99%29_2019_Movie_Poster.jpg",
                    'poster' => "https://upload.wikimedia.org/wikipedia/en/thumb/8/8e/Jade_Dynasty_%28%E8%AF%9B%E4%BB%99%29_2019_Movie_Poster.jpg/250px-Jade_Dynasty_%28%E8%AF%9B%E4%BB%99%29_2019_Movie_Poster.jpg",
                    'diretores' => 7,
                    'classificacao' => 14,
                    'ano_lancamento' => 2024,
                    'produtora_id' => 8,
                ],
            ]
        );
    }
}
