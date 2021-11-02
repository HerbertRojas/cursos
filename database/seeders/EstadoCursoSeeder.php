<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EstadoCurso;

class EstadoCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estado = EstadoCurso::firstOrCreate(['nombre'=>'Publicado','clase' =>'budge budge-sucess']);
        $estado = EstadoCurso::firstOrCreate(['nombre'=>'Pendiente','clase' =>'budge budge-warning']);
        $estado = EstadoCurso::firstOrCreate(['nombre'=>'Rechazado','clase' =>'budge budge-danger']);
    }
}
