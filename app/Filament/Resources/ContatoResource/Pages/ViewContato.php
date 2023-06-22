<?php

namespace App\Filament\Resources\ContatoResource\Pages;

use App\Filament\Resources\ContatoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewContato extends ViewRecord
{
    protected static string $resource = ContatoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
