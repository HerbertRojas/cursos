<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Helpers\Image;
class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            "Laravel" => "F35144",
            "Nodejs" => "8DBC58",
            "Vuejs" => "41B881",
            "React" => "0CC1E9",
            "Flutter" => "0098B6",
            "Swift" => "FF9733",
        ];


        $categoria1 = Categoria::firstOrCreate([
            'nombre' => 'Desarrollo Web'
        ]);

        $categoria2 = Categoria::firstOrCreate([
            'nombre' => 'Desarrollo Móvil'
        ]);

        $categoria = Categoria::firstOrCreate([
            'nombre'=> 'Laravel', 'padre_id'=>$categoria1->id,
            'imagen'=>null
        ]);
        $categoria = Categoria::firstOrCreate([
            'nombre'=> 'Nodejs', 'padre_id'=>$categoria1->id,
            'imagen'=>null
        ]);
        $categoria = Categoria::firstOrCreate([
            'nombre'=> 'Vuejs', 'padre_id'=>$categoria1->id,
            'imagen'=>null
        ]);
        $categoria = Categoria::firstOrCreate([
            'nombre'=> 'React', 'padre_id'=>$categoria1->id,
            'imagen'=>null
        ]);

        $categoria = Categoria::firstOrCreate([
            'nombre'=> 'Flutter', 'padre_id'=>$categoria2->id,
            'imagen'=>null
        ]);

        $categoria = Categoria::firstOrCreate([
            'nombre'=> 'Swift', 'padre_id'=>$categoria2->id,
            'imagen'=>null
        ]);

    }
}
