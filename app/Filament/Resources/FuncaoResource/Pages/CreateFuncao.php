<?php

namespace App\Filament\Resources\FuncaoResource\Pages;

use App\Filament\Resources\FuncaoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFuncao extends CreateRecord
{
    protected static string $resource = FuncaoResource::class;

    protected static ?string $title = 'Criar função';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
