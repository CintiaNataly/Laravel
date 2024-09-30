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
                'categoria' => 'Funcionalidades',
                'info_abreviada' => '¡Descubrí la forma más fácil de moverte en el aeropuerto con nuestra nueva app! Con solo ingresar tu número de vuelo, podrás buscar rápidamente lugares dentro del aeropuerto, desde restaurantes hasta tiendas.',
                'descripcion' => 'Además, si necesitáas asistencia, ¡Podés solicitarla al instante! No te pierdas de nada en tu próximo viaje. Descárgala ahora en Android y simplifica tu experiencia de viaje. ¡Tu aventura comienza aquí! ✈️📱',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'novedades_id' => 2,
                'titulo' => 'Ahora la información de tu vuelo más clara',
                'fecha_publicacion' => '2024-09-27',
                'categoria' => 'Funcionalidades',
                'info_abreviada' => 'Sabias que con AeroAsist podes ver toda la información de tu vuelo al alcance de tu mano, con alertas sobre retrasos o cancelaciones!',
                'descripcion' => '¿Sabías que con AeroAsist tenés toda la información de tu vuelo al alcance de la mano? Esta aplicación te permite consultar en tiempo real los detalles de tu viaje, como horarios de salida y llegada, puertas de embarque y cualquier cambio que pueda surgir. Olvidate de estar pendiente de los anuncios en el aeropuerto; con AeroAsist, toda la información que necesitás está a solo un toque.
                
                Una de las mejores características de AeroAsist son las alertas personalizadas. La app te envía notificaciones instantáneas sobre retrasos o cancelaciones, para que puedas organizar tu tiempo de manera más eficiente y evitar sorpresas de último momento. De esta manera, viajás con mayor tranquilidad, sabiendo que estás siempre informado sobre el estado de tu vuelo.

                En definitiva, con AeroAsist tu experiencia de viaje se vuelve más fácil y placentera, permitiéndote disfrutar al máximo cada aventura.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'novedades_id' => 3,
                'titulo' => 'Encontrá lugares en el aeropuerto de forma rápida',
                'fecha_publicacion' => '2024-09-27',
                'categoria' => 'Funcionalidades',
                'info_abreviada' => 'Llega a ese lugar que buscas sin demoras, de forma rapida y clara. Ya no vas a perder tu vuelo por no encontrar tu puerta de embarque o demoras en la parte comercial',
                'descripcion' => 'Llegar a tu puerta de embarque nunca fue tan fácil. Con la nueva funcionalidad de AeroAsist, podés desplazarte por el aeropuerto de forma rápida y clara, sin demoras innecesarias. Ya no tendrás que preocuparte por perder tu vuelo por no encontrar la puerta a tiempo o por distraerte en la parte comercial. La app te guía y te mantiene informado en cada paso, asegurando que llegues a donde necesitás sin contratiempos.

                Además, la experiencia de viajar se vuelve más placentera, ya que podés aprovechar el tiempo libre para disfrutar de las tiendas y restaurantes del aeropuerto. Gracias a AeroAsist, te asegurás de que cada parte de tu viaje, desde el check-in hasta el embarque, sea lo más fluida posible. Así, podés relajarte y disfrutar de la espera, sabiendo que tenés todo bajo control.',
                'created_at' => now(),
                'update_dat' => now(),
            ],
        ]);
    }
}
