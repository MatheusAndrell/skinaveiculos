<?php

namespace App\Filament\Resources\VeiculoResource\Pages;

use App\Filament\Resources\VeiculoResource;
use App\Models\Funcao;
use App\Models\FuncaoVeiculo;
use App\Models\Marca;
use App\Traits\GeneratesSlugs;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateVeiculo extends CreateRecord
{
    use GeneratesSlugs;

    protected static string $resource = VeiculoResource::class;

    protected static ?string $title = 'Criar veículo';

    protected function handleRecordCreation(array $data): Model
    {
        $funcoes = $data['funcoes'];
        
        unset($data['funcoes']);

        $data['slug'] = $this->generateSlug([
            Marca::find($data['marca_id'])->nome,
            $data['modelo'],
            $data['ano']
        ]);
        
        $record = static::getModel()::create($data);

        foreach($funcoes as $funcao) {
            FuncaoVeiculo::create([
                'veiculo_id' => $record->id,
                'funcao_id' => $funcao
            ]);
        }

        return $record;
    }
}
