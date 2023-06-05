<?php

namespace App\Filament\Resources\FuncaoResource\Pages;

use App\Filament\Resources\FuncaoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFuncaos extends ListRecords
{
    protected static string $resource = FuncaoResource::class;

    protected static ?string $title = 'Funções';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Criar função'),
        ];
    }
}
