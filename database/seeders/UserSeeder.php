<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_id = Role::where('nombre','Administrador')->first()->id;
        $docente_id = Role::where('nombre','Docente')->first()->id;

        $user = User::create([
            'name' =>'Admin master','email'=>'admin@me.com',
            'role_id'=>$admin_id,
            'password'=> Hash::make('123456789')
        ]);

        $user = User::create([
            'name' =>'Juan Perez','email'=>'jperez@me.com',
            'role_id'=>$docente_id,
            'password'=> Hash::make('123456789')
        ]);
    }
}
