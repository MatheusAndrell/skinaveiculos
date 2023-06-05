<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FuncaoResource\Pages;
use App\Filament\Resources\FuncaoResource\RelationManagers;
use App\Models\Funcao;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FuncaoResource extends Resource
{
    protected static ?string $model = Funcao::class;

    protected static ?string $breadcrumb = 'Funções';

    protected static ?string $navigationLabel = 'Funções';

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-list';

    protected static ?string $slug = 'funcoes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->unique('funcoes', 'nome')
                    ->maxLength(255)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome')
                    ->searchable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->modalHeading('Excluir função'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()
                    ->modalHeading('Excluir funções selecionadas'),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFuncaos::route('/'),
            'create' => Pages\CreateFuncao::route('/create'),
            'edit' => Pages\EditFuncao::route('/{record}/edit'),
        ];
    }
}
