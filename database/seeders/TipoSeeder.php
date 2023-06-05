<?php

namespace Database\Seeders;

use App\Models\Tipo;
use App\Traits\Seed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    use Seed;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = ['Carro', 'Moto'];

        $campo = 'nome';

        $this->singleFieldSeed($tipos, $campo, new Tipo);
    }
}
