public function edit($id)
{
    $veiculo = Veiculo::findOrFail($id);

    return view('admin.veiculos.edit', compact('veiculo'));
}

public function update(Request $request, $id)
{
    $veiculo = Veiculo::findOrFail($id);

    // Atualize as informações do veículo com base nos dados do formulário

    return redirect()->route('veiculos.show', $veiculo->id)
                     ->with('success', 'Informações do veículo atualizadas com sucesso!');
}
