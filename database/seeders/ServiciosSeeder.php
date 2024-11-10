<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;


class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servicios')->insert([
            [
                'servicios_id' => 1,
                'nombre' => 'Sala VIP Ezeiza Internacional - Partidas',
                'imagen' => 'img/salas_vip/sala_uno.jpg',
                'tarifa_acceso' => 90,
                'tarifa_socios' => 70,
                'descripcion' => 'Disfruta de un ambiente exclusivo con atención personalizada y acceso a servicios de primer nivel. Incluye bar, duchas y WiFi.',
                'condiciones' => 'Presentar documentación personal. Menores de 2 años sin cargo. Acceso a la sala sujeto a disponibilidad. Permanencia en sala de hasta 3 horas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'servicios_id' => 2,
                'nombre' => 'Sala VIP Aeroparque - Llegadas',
                'imagen' => 'img/salas_vip/sala_dos.jpg',
                'tarifa_acceso' => 75,
                'tarifa_socios' => 60,
                'descripcion' => 'Un espacio cómodo y tranquilo para esperar tu llegada. Ofrece refrigerios, conexión WiFi y áreas de descanso.',
                'condiciones' => 'Menores de 2 años sin cargo. Acceso sujeto a disponibilidad.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'servicios_id' => 3,
                'nombre' => 'Sala VIP Ezeiza Internacional - Llegadas',
                'imagen' => 'img/salas_vip/sala_tres.jpg',
                'tarifa_acceso' => 85,
                'tarifa_socios' => 65,
                'descripcion' => 'Relájate en un ambiente exclusivo con servicios como bar, atención al cliente y conexión a Internet.',
                'condiciones' => 'Presentar documentación personal. Acceso a la sala sujeto a disponibilidad. Permanencia en sala de hasta 3 horas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
