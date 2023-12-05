<?php

namespace App\Services;

use App\Models\Unit;

class UnitService 
{
        //teste
    public function create(array $data)
    {
        $payload = Unit::create([
            'razao_social' => $data['razao_social'],
            'nome_fantasia' => $data['nome_fantasia'],
            'cnpj' => $data['cnpj']
        ]);

        return $user;
    }
}