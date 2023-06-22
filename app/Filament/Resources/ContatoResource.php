<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContatoResource\Pages;
use App\Filament\Resources\ContatoResource\RelationManagers;
use App\Models\Contato;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContatoResource extends Resource
{
    protected static ?string $model = Contato::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->maxLength(120),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('telefone')
                    ->tel()
                    ->required()
                    ->maxLength(30),
                Forms\Components\Textarea::make('mensagem')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('telefone'),
                Tables\Columns\TextColumn::make('mensagem'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime(),
            ])
            ->filters([
                Filter::make('nome')
                ->form([
                    TextInput::make('nome')->label('Nome'),
                ])
                ->query(function ($query, array $data) {
                    return $query
                        ->when(
                            $data['nome'],
                            fn ($query) => $query->where('nome', 'like', '%' . $data['nome'] . '%'),
                        );
                })
                ->indicateUsing(fn (array $data): ?string => $data['nome'] ? 'Nome: ' . $data['nome'] : null),
                Filter::make('telefone')
                ->form([
                    TextInput::make('telefone')->label('Telefone'),
                ])
                ->query(function ($query, array $data) {
                    return $query
                        ->when(
                            $data['telefone'],
                            fn ($query) => $query->where('telefone', 'like', '%' . $data['telefone'] . '%'),
                        );
                })
                ->indicateUsing(fn (array $data): ?string => $data['telefone'] ? 'Telefone: ' . $data['telefone'] : null),
                Filter::make('email')
                ->form([
                    TextInput::make('email')->label('Email'),
                ])
                ->query(function ($query, array $data) {
                    return $query
                        ->when(
                            $data['email'],
                            fn ($query) => $query->where('email', 'like', '%' . $data['email'] . '%'),
                        );
                })
                ->indicateUsing(fn (array $data): ?string => $data['email'] ? 'Email: ' . $data['email'] : null),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListContatos::route('/'),
            'view' => Pages\ViewContato::route('/{record}'),
        ];
    }    
}
