<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Professor extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'formacao',
        'telefone',
        'email',
        'disciplina_id',
    ];

    public function disciplina(): BelongsToMany
    {
        return $this->belongsToMany(Disciplina::class);
    }

    public function turma(): HasMany
    {
        return $this->hasMany(Turma::class);
    }
}
