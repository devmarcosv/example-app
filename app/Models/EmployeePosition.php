<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePosition extends Model
{
    use HasFactory;

    protected $table = 'cargo_colaborador';

    protected $fillable = [
        'cargo_id',
        'colaborador_id',
        'nota_desempenho'
    ];
}
