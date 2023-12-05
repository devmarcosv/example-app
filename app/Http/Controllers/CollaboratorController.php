<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collaborators;
use App\Models\Office;
use App\Models\Unit;

class ColaboradorController extends Controller
{
    public function index()
    {
        $colaboradores = Collaborators::with('unidade')->get();
        return response()->json($colaboradores);
    }

    public function create(Request $request)
    {
        dd('take');
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required|unique:colaboradores',
            'email' => 'required|email|unique:colaboradores',
            'unidade_id' => 'required|exists:unidades,id',
        ]);

        $colaborador = Collaborators::create($request->all());

        return response()->json($colaborador, 201);
    }
}
