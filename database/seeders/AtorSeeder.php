<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class AtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('atores')->insert(
            ['name' => "Xiao Zhan", 'descricao' => "Ator chinês que fez papel de Wei Yin em the untamed", 'nacionalidade_id'=> 1], //1-> chines
            ['name' => "Selton Mello", 'descricao' => "Ator chinês que fez papel de Lan Zhan em the untamed", 'nacionalidade_id'=> 1],
        );
    }
}
