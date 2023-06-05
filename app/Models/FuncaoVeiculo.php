<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuncaoVeiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'veiculo_id',
        'funcao_id'
    ];

    public function funcao()
    {
        return $this->belongsTo(Funcao::class);
    }

    public function scopeVeiculo($builder, $id)
    {
        return FuncaoVeiculo::join('veiculos', 'funcao_veiculos.veiculo_id', '=', 'veiculos.id')
            ->join('funcoes', 'funcoes.id', '=', 'funcao_veiculos.funcao_id')
            ->where('veiculos.id', $id)
            ->pluck('funcoes.id')
            ->toArray();
    }
}
