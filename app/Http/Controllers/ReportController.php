<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use App\Models\Unidade;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function colaboradores()
    {
        $relatorio = Colaborador::with(['cargo', 'unidade'])->select('nome', 'cpf', 'email', 'unidade_id', 'cargo_id')->get();
        return response()->json($relatorio);
    }

    public function totalColaboradoresPorUnidade()
    {
        $relatorio = Unidade::withCount('colaboradores')->select('nome_fantasia', 
        'razao_social', 
        'cnpj', 
        'colaboradores_count as total_colaboradores')
        ->get();
        
        return response()->json($relatorio);
    }

    public function rankingColaboradores()
    {
        $relatorio = Colaborador::with(['cargo', 'unidade'])
            ->orderByDesc('nota_desempenho')
            ->select('nome', 'cpf', 'email', 'unidade_id', 'nota_desempenho')
            ->get();

        return response()->json($relatorio);
    }
}
