<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('categorias');
        Storage::makeDirectory('categorias');
        Storage::deleteDirectory('cursos');
        Storage::makeDirectory('cursos');
        Storage::deleteDirectory('unidades');
        Storage::makeDirectory('unidades');
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            EstadoCursoSeeder::class,
            CategoriaSeeder::class,
            UnidadTipoSeeder::class,
            CursoSeeder::class,
        ]);
    }
}
