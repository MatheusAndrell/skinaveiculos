<?php

namespace App\Http\Controllers;

use App\Models\Imagem;
use App\Models\Veiculo;

class PageController extends Controller
{

    /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $veiculos = Veiculo::with(['marca:id,nome', 'imagens'])
            ->inRandomOrder()
            ->limit(7)
            ->get();

        $novidades = Veiculo::with(['marca:id,nome', 'imagens'])
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        $imagemAleatoria = Imagem::all()->random()->url; 

        return view('inicio', compact('veiculos', 'novidades', 'imagemAleatoria'));
    }

    public function visualizar($slug)
    {
        $veiculo = Veiculo::with(['marca', 'tipo', 'funcoes', 'funcoes.funcao', 'imagens'])->where('slug', $slug)->first();

        if(!$veiculo)
            return abort(404);

            $imagemAleatoria = Imagem::all()->random()->url; 
        return view('veiculo', compact('veiculo', 'imagemAleatoria'));
    }

    public function estoque()
    {
        $veiculos = Veiculo::with(['marca:id,nome', 'imagens'])
            ->get();

        return view('estoque', compact('veiculos'));
    }

}
