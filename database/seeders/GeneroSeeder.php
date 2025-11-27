<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('generos')->insert(
            [
                ['nome' => "Terror"],
                ['nome' => "Ação"],
                ['nome' => "Comédia"],
                ['nome' => "Romance"],
                ['nome' => "Suspense"],
                ['nome' => "Ficção Científica"],
                ['nome' => "Documentário"],
                ['nome' => "Animação"],
                ['nome' => "Drama"],
                ['nome' => "Fantasia"],
                ['nome' => "Aventura"],
                ['nome' => "Musical"],
                ['nome' => "Histórico"],
                ['nome' => "Guerra"],
                ['nome' => "Policial"],
                ['nome' => "Biografia"],
                ['nome' => "Infantil"],
                ['nome' => "Esporte"],
                ['nome' => "Crime"],
                ['nome' => "Thriller"],
                ['nome' => "Mistério"],
                ['nome' => "Sobrenatural"],
            ]
        );
    }
}
