<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EstadoCurso extends Model
{
    use HasFactory;

    protected $fillable = ['id','nombre','clase'];

    /**
     * Get all of the cursos for the EstadoCurso
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursos(): HasMany
    {
        return $this->hasMany(Curso::class);
    }
}
