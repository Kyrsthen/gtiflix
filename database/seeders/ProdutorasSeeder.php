<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutorasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtoras')->insert(
            [
                ['nome' => "Nacional Filmes"],
                ['nome' => "Warnerbros"],
                ['nome' => "TNT Movies"],
                ['nome' => "Movie Plus"],
                ['nome' => "Max"],
                ['nome' => "Zazen Produções"],
                ['nome' => "Paramount Pictures"],
                ['nome' => "Universal Pictures"],
                ['nome' => "20th Century Studios"],
                ['nome' => "Columbia Pictures"],
                ['nome' => "Lionsgate"],
                ['nome' => "MGM Studios"],
                ['nome' => "Syncopy films"],
                ['nome' => "Legendary Entertainment"],
                ['nome' => "Blumhouse Productions"],
            ]
        );
    }
}
