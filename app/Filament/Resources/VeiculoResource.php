<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VeiculoResource\Pages;
use App\Filament\Resources\VeiculoResource\RelationManagers;
use App\Models\Funcao;
use App\Models\Marca;
use App\Models\Tipo;
use App\Models\Veiculo;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Leandrocfe\FilamentPtbrFormFields\PtbrMoney;

class VeiculoResource extends Resource
{
    protected static ?string $model = Veiculo::class;

    protected static ?string $navigationLabel = 'Veículos';

    protected static ?string $breadcrumb = 'Veículos';

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('tipo_id')
                    ->label('Tipo')
                    ->options(Tipo::pluck('nome', 'id'))
                    ->required(),
                Forms\Components\Select::make('marca_id')
                    ->label('Marca')
                    ->relationship('marca', 'nome')
                    ->options(Marca::pluck('nome', 'id'))
                    ->createOptionForm([
                        Forms\Components\TextInput::make('nome')
                            ->required()
                            ->unique('marcas', 'nome'),
                    ])
                    ->disablePlaceholderSelection()
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('funcoes')
                    ->label('Funções')
                    ->multiple()
                    ->options(Funcao::pluck('nome', 'id'))
                    ->searchable()
                    ->required()
                    ->reactive(),
                Forms\Components\TextInput::make('modelo')
                    ->required(),
                Forms\Components\TextInput::make('quilometragem')
                    ->required()
                    ->numeric()
                    ->maxValue(1e7),
                PtbrMoney::make('preco')
                    ->label('Preço')
                    ->required(),
                Forms\Components\TextInput::make('cor')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ano')
                    ->required()
                    ->reactive()
                    ->numeric()
                    ->length(4),
                Forms\Components\TextInput::make('placa')
                    ->required()
                    ->maxLength(10),
                Forms\Components\Textarea::make('sobre')
                    ->columnSpanFull()
                    ->maxLength(65535),
                Forms\Components\Toggle::make('aceita_troca')
                    ->label('Aceita Troca')
                    ->required(),
                Forms\Components\Toggle::make('ipva_pago')
                    ->label('IPVA Pago')
                    ->required(),
                Forms\Components\Hidden::make('slug'),
                Forms\Components\Hidden::make('id')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tipo.nome'),
                Tables\Columns\TextColumn::make('marca.nome'),
                Tables\Columns\TextColumn::make('modelo'),
                Tables\Columns\TextColumn::make('ano')
                    ->sortable(),
                Tables\Columns\TextColumn::make('preco')
                    ->label('Preço')
                    ->formatStateUsing(fn (string $state): string => 'R$ ' . number_format($state, 2))
                    ->sortable(),
                Tables\Columns\TextColumn::make('quilometragem')
                    ->sortable()
                    ->formatStateUsing(fn (string $state): string => $state . ' km'),
                Tables\Columns\TextColumn::make('cor'),
                Tables\Columns\IconColumn::make('aceita_troca')
                    ->boolean(),
                Tables\Columns\IconColumn::make('ipva_pago')
                    ->label('IPVA Pago')
                    ->boolean(),
                Tables\Columns\TextColumn::make('placa'),
                Tables\Columns\TextColumn::make('sobre'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime('d/m/Y H:i:s'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Atualizado em')
                    ->dateTime('d/m/Y H:i:s'),
            ])
            ->filters([
                SelectFilter::make('tipo_id')
                    ->label('Tipo')
                    ->options(Tipo::pluck('nome', 'id')),
                SelectFilter::make('marca_id')
                    ->label('Marca')
                    ->multiple()
                    ->options(Marca::pluck('nome', 'id')),
                Filter::make('modelo')
                    ->form([
                        TextInput::make('modelo')->label('Modelo'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when(
                                $data['modelo'],
                                fn ($query) => $query->where('modelo', 'like', '%' . $data['modelo'] . '%'),
                            );
                    })
                    ->indicateUsing(fn (array $data): ?string => $data['modelo'] ? 'Modelo: ' . $data['modelo'] : null),
                Filter::make('cor')
                    ->form([
                        TextInput::make('cor')->label('Cor'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when(
                                $data['cor'],
                                fn ($query) => $query->where('cor', 'like', '%' . $data['cor'] . '%'),
                            );
                    })
                    ->indicateUsing(fn (array $data): ?string => $data['cor'] ? 'Cor: ' . $data['cor'] : null),
                Filter::make('ipva_pago')
                    ->query(fn ($query) => $query->where('ipva_pago', true))
                    ->label('IPVA Pago')
                    ->toggle(),
                Filter::make('aceita_troca')
                    ->query(fn ($query) => $query->where('aceita_troca', true))
                    ->label('Aceita Troca')
                    ->toggle(),
                Filter::make('aceita_troca')
                    ->query(fn ($query) => $query->where('aceita_troca', true))
                    ->label('Aceita Troca')
                    ->toggle(),
                Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from')
                            ->label('Criado em'),
                        Forms\Components\DatePicker::make('created_until')
                            ->label('Criado até'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn ($query, $date) => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn ($query, $date) => $query->whereDate('created_at', '<=', $date),
                            );
                    }),
                Filter::make('placa')
                    ->form([
                        TextInput::make('placa')->label('Placa'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when(
                                $data['placa'],
                                fn ($query) => $query->where('placa', 'like', '%' . $data['placa'] . '%'),
                            );
                    })
                    ->indicateUsing(fn (array $data): ?string => $data['placa'] ? 'Placa: ' . $data['placa'] : null),
                Filter::make('ano')
                    ->form([
                        TextInput::make('ano')->label('Ano'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when(
                                $data['ano'],
                                fn ($query) => $query->where('ano', $data['ano']),
                            );
                    })
                    ->indicateUsing(fn (array $data): ?string => $data['ano'] ? 'Ano: ' . $data['ano'] : null),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()
                    ->modalHeading('Excluir veículos selecionados'),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\VeiculoRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVeiculos::route('/'),
            'create' => Pages\CreateVeiculo::route('/create'),
            'edit' => Pages\EditVeiculo::route('/{record}/edit'),
        ];
    }
}
