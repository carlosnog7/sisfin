<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valor extends Model
{
    use HasFactory;

    // Nome da tabela no banco de dados
    protected $table = 'valores';

    // Atributos que podem ser preenchidos em massa
    protected $fillable = [
        'acao', 'valor', 'data', 'descricao'
    ];
}
