<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborators extends Model
{
    use HasFactory;

    protected $table = 'colaboradores';

    protected $fillable = [
        'unidade_id',
        'nome',
        'cpf',
        'email'
    ];

      // Relação com o modelo Unidade
      public function unidade()
      {
          return $this->belongsTo(Unidade::class);
      }
}
