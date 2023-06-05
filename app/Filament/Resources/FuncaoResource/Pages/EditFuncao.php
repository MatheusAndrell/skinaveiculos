<?php

namespace App\Filament\Resources\FuncaoResource\Pages;

use App\Filament\Resources\FuncaoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFuncao extends EditRecord
{
    protected static string $resource = FuncaoResource::class;

    protected static ?string $title = 'Funções';

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Função salva!';
    }
}
