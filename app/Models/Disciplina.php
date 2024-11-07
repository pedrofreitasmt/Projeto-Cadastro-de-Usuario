<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Disciplina extends Model
{
    protected $fillable = [
        'nome',
        'carga_horaria',
        'descricao',
    ];

    public function professor(): BelongsToMany
    {
        return $this->belongsToMany(Professor::class);
    }
}
