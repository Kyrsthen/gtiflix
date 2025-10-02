<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('generos')->insert(
            ['name' => "Terror"],
            ['name' => "Ação"],
            ['name' => "Drama"],
            ['name' => "Comedia"],
            ['name' => "Aventura"],
            ['name' => "Suspense"],
            ['name' => "Romance"],
            ['name' => "Ficção-cientifica"],
        );
    }
}
