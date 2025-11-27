<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NacionalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nacionalidades')->insert(
            [
                [
                    'nome' => "Brasileiro(a)",
                ],

                [
                    'nome' => "Americano(a)",
                ],
                [
                    'nome' => "Australiano(a)",
                ],
                [
                    'nome' => "Britânico(a)",
               ],
                [
                    'nome' => "Canadense",
                ],
                [
                    'nome' => "Francês(a)",
                ],
                [
                    'nome' => "Alemão(a)",
                ],
                [
                    'nome' => "Italiano(a)",
                ],
                [
                    'nome' => "Japonês(a)",
                ],
                [
                    'nome' => "Indiano(a)",
                ],
                [
                    'nome' => "Chinês(a)",
                ],
            ]
        );
    }
}
