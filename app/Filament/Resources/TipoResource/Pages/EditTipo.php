<?php

namespace App\Filament\Resources\TipoResource\Pages;

use App\Filament\Resources\TipoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTipo extends EditRecord
{
    protected static string $resource = TipoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
