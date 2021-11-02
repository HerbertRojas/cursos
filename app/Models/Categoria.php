<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Categoria extends Model
{
    use HasFactory;

    /**
     * Get all of the subcategorias for the Categoria
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subcategorias(): HasMany
    {
        return $this->hasMany(Categoria::class, 'padre_id', 'id');
    }

    /**
     * Get the padre that owns the Categoria
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function padre(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    /**
     * The cursos that belong to the Categoria
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cursos(): BelongsToMany
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }
}
