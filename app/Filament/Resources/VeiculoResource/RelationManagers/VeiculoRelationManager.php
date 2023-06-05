<?php

namespace App\Filament\Resources\VeiculoResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VeiculoRelationManager extends RelationManager
{
    protected static string $relationship = 'imagens';

    protected static ?string $recordTitleAttribute = 'imagem';

    protected static ?string $modelLabel = 'Imagem';

    protected static ?string $pluralModelLabel = 'Imagens';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('url')
                    ->label('Imagem')
                    ->required(),
                Forms\Components\Select::make('tipo')
                    ->label('Tipo de Imagem')
                    ->helperText('A imagem principal aparecerá como capa do veículo.')
                    ->options([
                        'P' => 'Principal',
                        'C' => 'Complementar'
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('url')
                    ->label('Imagem')
                    ->width(100)
                    ->height(75),
                Tables\Columns\TextColumn::make('tipo')
                    ->enum([
                        'P' => 'Principal',
                        'C' => 'Complementar'
                    ]),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()
                    ->modalHeading('Apagar imagens selecionadas'),
            ]);
    }    
}
