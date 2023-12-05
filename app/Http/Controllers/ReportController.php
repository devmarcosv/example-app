<?php

namespace App\Http\Controllers;

use App\Models\Collaborators;
use App\Models\Unit;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function colaboradores()
    {
        $relatorio = Collaborators::with(['unidade'])->select('nome', 'cpf', 'email', 'unidade_id')->get();
        return response()->json($relatorio);
    }

    public function totalColaboradoresPorUnidade()
    {
        $relatorio = Unit::withCount('colaboradores')->select('nome_fantasia', 
        'razao_social', 
        'cnpj', 
        'colaboradores_count as total_colaboradores')
        ->get();
        
        return response()->json($relatorio);
    }

    public function rankingColaboradores()
    {
        $relatorio = Collaborators::with(['unidade'])
            ->orderByDesc('nota_desempenho')
            ->select('nome', 'cpf', 'email', 'unidade_id', 'nota_desempenho')
            ->get();

        return response()->json($relatorio);
    }
}
