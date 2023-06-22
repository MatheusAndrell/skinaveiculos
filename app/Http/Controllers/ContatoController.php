<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContatoRequest;
use App\Models\Contato;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContatoController extends Controller
{
    public function index()
    {
        return view('contato');
    }

    public function store(StoreContatoRequest $request)
    {
        try {
            Contato::create($request->validated());

            return redirect()
                ->back()
                ->with('success', 'Solicitação criada com sucesso!');
        } catch (Exception $e) {    
            Log::critical($e->getMessage());

            return redirect()
                ->back()
                ->with('error', 'Ocorreu um erro... Tente novamente mais tarde!');
        }

    }
}
