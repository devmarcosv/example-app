<?php

namespace App\Http\Controllers;

use App\Models\Collaborators;
use App\Models\Unit;
use App\Models\EmployeePosition;

use Illuminate\Http\Request;

class EmployePositionController extends Controller
{

public function cadastrarNotaDesempenho(Request $request, $colaboradorId)
{
    $request->validate([
        'nota_desempenho' => 'required|numeric|min:0|max:10',
    ]);

    $colaborador = Collaborators::findOrFail($colaboradorId);
    $cargoColaborador = EmployeePosition::where('colaborador_id', $colaborador->id)->first();

    if (!$cargoColaborador) {
        return response()->json(['message' => 'Colaborador não encontrado'], 404);
    }

    $cargoColaborador->nota_desempenho = $request->nota_desempenho;
    $cargoColaborador->save();

    return response()->json(['message' => 'Nota de desempenho cadastrada/atualizada com sucesso']);
}


}
