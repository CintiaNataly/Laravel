-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2024 a las 01:57:06
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portales_2024`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_29_011407_novedades', 1),
(5, '2024_09_29_232317_add_categoria_to_novedades_table', 2),
(6, '2024_09_30_142548_create_servicios_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE `novedades` (
  `novedades_id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `info_abreviada` text NOT NULL,
  `descripcion` text NOT NULL,
  `categoria` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`novedades_id`, `titulo`, `fecha_publicacion`, `info_abreviada`, `descripcion`, `categoria`, `created_at`, `updated_at`) VALUES
(1, 'App de Asistencia en Aeropuertos', '2024-09-27', '¡Descubrí la forma más fácil de moverte en el aeropuerto con nuestra nueva app! Con solo ingresar tu número de vuelo, podrás buscar rápidamente lugares dentro del aeropuerto, desde restaurantes hasta tiendas.', 'Además, si necesitas asistencia, ¡Podés solicitarla al instante! No te pierdas de nada en tu próximo viaje. Descárgala ahora en Android y simplifica tu experiencia de viaje. ¡Tu aventura comienza aquí! ✈️📱', 'Funcionalidades', '2024-10-07 22:41:13', '2024-10-08 02:29:32'),
(2, 'Ahora la información de tu vuelo más clara', '2024-09-27', 'Sabias que con AeroAsist podes ver toda la información de tu vuelo al alcance de tu mano, con alertas sobre retrasos o cancelaciones!', '¿Sabías que con AeroAsist tenés toda la información de tu vuelo al alcance de la mano? Esta aplicación te permite consultar en tiempo real los detalles de tu viaje, como horarios de salida y llegada, puertas de embarque y cualquier cambio que pueda surgir. Olvidate de estar pendiente de los anuncios en el aeropuerto; con AeroAsist, toda la información que necesitás está a solo un toque.\r\n                \r\n                Una de las mejores características de AeroAsist son las alertas personalizadas. La app te envía notificaciones instantáneas sobre retrasos o cancelaciones, para que puedas organizar tu tiempo de manera más eficiente y evitar sorpresas de último momento. De esta manera, viajás con mayor tranquilidad, sabiendo que estás siempre informado sobre el estado de tu vuelo.\r\n\r\n                En definitiva, con AeroAsist tu experiencia de viaje se vuelve más fácil y placentera, permitiéndote disfrutar al máximo cada aventura.', 'Funcionalidades', '2024-10-07 22:41:13', '2024-10-07 22:41:13'),
(3, 'Encontrá lugares en el aeropuerto de forma rápida', '2024-09-27', 'Llega a ese lugar que buscas sin demoras, de forma rapida y clara. Ya no vas a perder tu vuelo por no encontrar tu puerta de embarque o demoras en la parte comercial', 'Llegar a tu puerta de embarque nunca fue tan fácil. Con la nueva funcionalidad de AeroAsist, podés desplazarte por el aeropuerto de forma rápida y clara, sin demoras innecesarias. Ya no tendrás que preocuparte por perder tu vuelo por no encontrar la puerta a tiempo o por distraerte en la parte comercial. La app te guía y te mantiene informado en cada paso, asegurando que llegues a donde necesitás sin contratiempos.\r\n\r\n                Además, la experiencia de viajar se vuelve más placentera, ya que podés aprovechar el tiempo libre para disfrutar de las tiendas y restaurantes del aeropuerto. Gracias a AeroAsist, te asegurás de que cada parte de tu viaje, desde el check-in hasta el embarque, sea lo más fluida posible. Así, podés relajarte y disfrutar de la espera, sabiendo que tenés todo bajo control.', 'Funcionalidades', '2024-10-07 22:41:13', '2024-10-07 22:41:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `servicios_id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `tarifa_acceso` int(10) UNSIGNED NOT NULL,
  `tarifa_socios` int(10) UNSIGNED NOT NULL,
  `descripcion` text DEFAULT NULL,
  `condiciones` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`servicios_id`, `nombre`, `imagen`, `tarifa_acceso`, `tarifa_socios`, `descripcion`, `condiciones`, `created_at`, `updated_at`) VALUES
(1, 'Sala VIP Ezeiza Internacional - Partidas', 'img/salas_vip/sala_uno.jpg', 90, 70, 'Disfruta de un ambiente exclusivo con atención personalizada y acceso a servicios de primer nivel. Incluye bar, duchas y WiFi.', 'Presentar documentación personal. Menores de 2 años sin cargo. Acceso a la sala sujeto a disponibilidad. Permanencia en sala de hasta 3 horas.', '2024-10-07 22:32:59', '2024-10-07 22:32:59'),
(2, 'Sala VIP Aeroparque - Llegadas', 'img/salas_vip/sala_dos.jpg', 75, 60, 'Un espacio cómodo y tranquilo para esperar tu llegada. Ofrece refrigerios, conexión WiFi y áreas de descanso.', 'Menores de 2 años sin cargo. Acceso sujeto a disponibilidad.', '2024-10-07 22:32:59', '2024-10-07 22:32:59'),
(3, 'Sala VIP Ezeiza Internacional - Llegadas', 'img/salas_vip/sala_tres.jpg', 85, 65, 'Relájate en un ambiente exclusivo con servicios como bar, atención al cliente y conexión a Internet.', 'Presentar documentación personal. Acceso a la sala sujeto a disponibilidad. Permanencia en sala de hasta 3 horas.', '2024-10-07 22:32:59', '2024-10-07 22:32:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('OzAiR88zYM1K0ghd82YXsYOQpEBO487iWvaQdX8R', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibzRzdkVTQUd5TFZPT0JDWmFzOVlLNXJtRFAxbnJMeEZqWklaeHJhViI7czo4OiJmZWVkYmFjayI7YTowOnt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3QvTGFyYXZlbC9wdWJsaWMvc2VydmljaW9zIjt9czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo1ODoiaHR0cDovL2xvY2FsaG9zdC9MYXJhdmVsL3B1YmxpYy9hZG1pbi9ub3ZlZGFkZXMvNC9lbGltaW5hciI7fX0=', 1728431751);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'JuanPerez', 'juan@perez.com', NULL, '$2y$12$f//Gwcwm72wZtLkFHrRVTO8SqSD6VhiQ0dl3ukv.4zz6IEY3IT1ty', NULL, '2024-10-08 00:00:38', '2024-10-08 00:00:38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD PRIMARY KEY (`novedades_id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`servicios_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `novedades`
--
ALTER TABLE `novedades`
  MODIFY `novedades_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `servicios_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
