<?php

namespace Database\Seeders;

use App\Models\Marca;
use App\Traits\Seed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    use Seed;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marcas = [
            'Toyota',
            'Fiat',
            'Volkswagen',
            'Chevrolet',
            'Nissan',
            'Ford',
        ];

        $campo = 'nome';

        $this->singleFieldSeed($marcas, $campo, new Marca);
    }
}
