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
}
