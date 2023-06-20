<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_id',
        'modelo',
        'marca_id',
        'quilometragem',
        'cor',
        'aceita_troca',
        'ipva_pago',
        'ano',
        'preco',
        'placa',
        'sobre',
        'slug'
    ];

    protected $casts = [
        'aceita_troca' => 'boolean',
        'ipva_pago' => 'boolean',
    ];

    public function imagens() {
        return $this->hasMany(Imagem::class);
    }

    public function funcoes()
    {
        return $this->hasMany(FuncaoVeiculo::class);
    }

    public function funcao() {
        return $this->belongsTo(Funcao::class);
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

}
