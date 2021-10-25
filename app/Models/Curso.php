<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

class Curso extends Model
{
    use HasFactory;

    protected $fillable=[
        'id','titulo','descripcion','user_id','imagen',
        'precio','destacado','estado_curso_id'

    ];
    /**
     * The categorias that belong to the Curso
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categorias(): BelongsToMany
    {
        return $this->belongsToMany(Categoria::class)->withTimestamps();
    }

    /**
     * Get the docente that owns the Curso
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function docente(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    /**
     * The estudiantes that belong to the Curso
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function estudiantes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'curso_estudiante', 'user_id', 'curso_id')->withTimestamps();
    }

    public function scopeFiltered(Builder $builder, Categoria $categoria = null){
        $builder->with("docente", "categorias", "wishlists");
        $builder->withCount("estudiantes");
        $builder->where("status", 'Publicado');
        if (session()->has('search[cursos]')) {
            $builder->where('titulo', 'LIKE', '%' . session('search[cursos]') . '%');
        }

        if ($categoria){
            $builder->whereHas("categorias", function (Builder $table) use ($categoria) {
               $table->where("id", $categoria->id);
            });
        }
        return $builder->paginate();
    }
}
