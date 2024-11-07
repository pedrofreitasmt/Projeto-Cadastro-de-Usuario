<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Aluno extends Model
{
    protected $fillable = [
        'nome',
        'data_nascimento',
        'endereco',
        'email',
        'turma_id',
        'matricula_id',
    ];

    protected $casts = [
        'data_nascimento' => 'date',
    ];

    public function turma(): BelongsTo
    {
        return $this->belongsTo(Turma::class);
    }

    public function matricula()
    {
        return $this->hasOne(Matricula::class);
    }
}
