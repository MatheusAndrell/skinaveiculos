<?php

namespace Database\Seeders;

use App\Models\Funcao;
use App\Traits\Seed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class FuncaoSeeder extends Seeder
{
    use Seed;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $funcoes = [
            'Vidro Elétrico',
            'Roda Liga Leve',
            'Freio ABS',
            'Trava Elétrica',
            'Ar condicionado'
        ];

        $campo = 'nome';

        $this->singleFieldSeed($funcoes, $campo, new Funcao);
    }
}
