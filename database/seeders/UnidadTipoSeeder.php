<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UnidadTipo;

class UnidadTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnidadTipo::firstOrCreate(['nombre' =>'ZIP']);
        UnidadTipo::firstOrCreate(['nombre' =>'VIDEO']);
        UnidadTipo::firstOrCreate(['nombre' =>'SECCION']);
    }
}
