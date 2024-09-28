<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class NovedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('novedades')->insert([
            [
                'novedades_id' => 1,
                'titulo' => 'App de Asistencia en Aeropuertos',
                'fecha_publicacion' => '2024-09-27',
                'informacion'=> '¡Descubrí la forma más fácil de moverte en el aeropuerto con nuestra nueva app! Con solo ingresar tu número de vuelo, podrás buscar rápidamente lugares dentro del aeropuerto, desde restaurantes hasta tiendas. Además, si necesitáas asistencia, ¡Podés solicitarla al instante! No te pierdas de nada en tu próximo viaje. Descárgala ahora en Android y simplifica tu experiencia de viaje. ¡Tu aventura comienza aquí! ✈️📱',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'novedades_id' => 2,
                'titulo' => 'Ahora la información de tu vuelo más clara',
                'fecha_publicacion' => '2024-09-27',
                'informacion'=> 'Sabias que con AeroAsist podes ver toda la información de tu vuelo al alcance de tu mano, con alertas sobre retrasos o cancelaciones!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'novedades_id' => 3,
                'titulo' => 'Encontrá lugares en el aeropuerto de forma rápida',
                'fecha_publicacion' => '2024-09-27',
                'informacion'=> 'Llega a ese lugar que buscas sin demoras, de forma rapida y clara. Ya no vas a perder tu vuelo por no encontrar tu puerta de embarque o demoras en la parte comercial',
                'created_at' => now(),
                'update_dat' => now(),
            ],
        ]);
    }
}
