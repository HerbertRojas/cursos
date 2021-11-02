<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate(['nombre' => 'Administrador']);
        Role::firstOrCreate(['nombre' => 'Docente']);
        Role::firstOrCreate(['nombre' => 'Estudiante']);
    }
}
