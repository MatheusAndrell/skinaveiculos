<?php

namespace App\Filament\Resources\VeiculoResource\Pages;

use App\Filament\Resources\VeiculoResource;
use App\Models\FuncaoVeiculo;
use App\Models\Marca;
use App\Models\Veiculo;
use App\Traits\GeneratesSlugs;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVeiculo extends EditRecord
{
    use GeneratesSlugs;

    protected static string $resource = VeiculoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $funcoes = FuncaoVeiculo::veiculo($data['id']);

        $data['funcoes'] = $funcoes;

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $funcoes = FuncaoVeiculo::where('veiculo_id', $data['id'])
            ->pluck('id')
            ->toArray();

        FuncaoVeiculo::destroy($funcoes);

        $novasFuncoes = [];

        foreach($data['funcoes'] as $funcao) {
            $novasFuncoes[] = [
                'veiculo_id' => $data['id'],
                'funcao_id' => $funcao,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        
        FuncaoVeiculo::insert($novasFuncoes);

        $data['slug'] = $this->generateSlug([
            Marca::find($data['marca_id'])->nome,
            $data['modelo'],
            $data['ano']
        ]);

        return $data;
    }
}
