<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'email' => 'juan@perez.com',
                'name' => 'JuanPerez',
                'servicio_fk' => 1,
                'password' => Hash::make('1234'),
                'rol' => 'usuario',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'email' => 'cintia.bustos@davinci.edu.ar',
                'name' => 'Cintia',
                'servicio_fk' => 2,
                'password' => Hash::make('1234'),
                'rol' => 'administrador',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'email' => 'fernanda.paoliello@davinci.edu.ar',
                'name' => 'Fernanda',
                'servicio_fk' => 2,
                'password' => Hash::make('1234'),
                'rol' => 'administrador',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
