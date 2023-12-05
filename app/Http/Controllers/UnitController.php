<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Services\UnitService;
use Illuminate\Support\Facades\DB;
use App\Models\Unit;



class UnitController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $service;

    public function __construct(UnitService $service)
    {
        $this->service = $service;
    }

    public function index() 
    {
        $data = Unit::paginate(10);
        
        return $data->toArray();
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'razao_social' => 'required|string',
            'nome_fantasia' => 'required|string',
            'cnpj' => 'required|unique:unidades,cnpj'
        ]);

        try {
            return $this->service->create($data);

        }catch (\Exception $exception){
            return response()->json([
                'message' => $exception->getMessage(),
            ], Response::HTTP_BAD_REQUEST);
        }

    }
}
    