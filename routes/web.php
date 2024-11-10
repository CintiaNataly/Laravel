<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserRole;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
    ->name('inicio');

Route::get('/quienes-somos', [\App\Http\Controllers\AboutController::class, 'index'])
    ->name('quienes-somos');

Route::get('/servicios', [\App\Http\Controllers\ServiciosController::class, 'index'])
    ->name('servicios');

Route::get('/confirmar-reserva/{id}', [\App\Http\Controllers\UsersController::class, 'confirmar_reserva'])
    ->name('confirmar.reserva');

Route::get('/novedades', [\App\Http\Controllers\NewsController::class, 'index'])
    ->name('novedades');

Route::get('/novedades/{id}', [\App\Http\Controllers\NewsController::class, 'show'])
    ->whereNumber('id')
    ->name('novedades.show');

Route::get('/contactanos', [ContactUsController::class, 'index'])
    ->name('contactanos');

Route::post('/contactanos', [ContactUsController::class, 'contacto']);

Route::get('/registrarme', [\App\Http\Controllers\UsersController::class, 'registrar_usuario'])
    ->name('usuarios.registrar');

Route::post('/admin/registro/publicar', [\App\Http\Controllers\UsersController::class, 'almacenar_usuario_registrado'])
    ->name('usuario.registrado');

Route::get('/mi-perfil/{id}', [\App\Http\Controllers\UsersController::class, 'ver_perfil'])
    ->name('ver.perfil');


Route::middleware([\App\Http\Middleware\CheckUserRole::class . ':administrador'])->group(function () {

    //--------------------------------------------------------------------------------------------------Admin
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index',])
        ->name('admin')
        ->middleware('auth');

    //-------------------------------------------------------------------------------------------Admin Usuarios
    Route::get('/admin/usuarios', [\App\Http\Controllers\UsersController::class, 'admin_usuarios'])
        ->name('usuarios.admin')
        ->middleware('auth');

    Route::get('/admin/usuarios/{id}/ver', [\App\Http\Controllers\UsersController::class, 'ver_usuario'])
        ->name('usuarios.ver')
        ->middleware('auth');

    Route::get('/admin/usuarios/publicar', [\App\Http\Controllers\UsersController::class, 'crear_usuario'])
        ->name('usuarios.crear')
        ->middleware('auth');

    Route::post('/admin/usuarios/publicar', [\App\Http\Controllers\UsersController::class, 'almacenar_usuario'])
        ->name('usuario.guardar')
        ->middleware('auth');

    Route::get('/admin/usuarios/{id}/editar', [\App\Http\Controllers\UsersController::class, 'editar_usuario'])
        ->name('usuarios.editar')
        ->middleware('auth');

    Route::post('/admin/usuarios/{id}/editar', [\App\Http\Controllers\UsersController::class, 'actualizar_usuario'])
        ->name('usuarios.actualizar')
        ->middleware('auth');

    Route::get('/admin/usuarios/{id}/eliminar', [\App\Http\Controllers\UsersController::class, 'eliminar_usuario'])
        ->name('usuarios.eliminar')
        ->middleware('auth');

    Route::post('/admin/usuarios/{id}/eliminar', [\App\Http\Controllers\UsersController::class, 'destruir_usuario'])
        ->name('usuarios.confirmar-eliminar')
        ->middleware('auth');

    //-------------------------------------------------------------------------------------------ABM Servicios
    Route::get('/admin/servicios', [\App\Http\Controllers\ServiciosController::class, 'admin_servicios'])
        ->name('servicios.admin')
        ->middleware('auth');

    Route::get('/admin/servicios/publicar', [\App\Http\Controllers\ServiciosController::class, 'crear_servicio'])
        ->name('servicios.crear')
        ->middleware('auth');

    Route::post('/admin/servicios/publicar', [\App\Http\Controllers\ServiciosController::class, 'almacenar_servicio'])
        ->name('servicios.guardar')
        ->middleware('auth');

    Route::get('/admin/servicios/{id}/editar', [\App\Http\Controllers\ServiciosController::class, 'editar_servicio'])
        ->name('servicios.editar')
        ->middleware('auth');

    Route::post('/admin/servicios/{id}/editar', [\App\Http\Controllers\ServiciosController::class, 'actualizar_servicio'])
        ->name('servicios.actualizar')
        ->middleware('auth');

    Route::get('/admin/servicios/{id}/eliminar', [\App\Http\Controllers\ServiciosController::class, 'eliminar_servicio'])
        ->name('servicios.eliminar')
        ->middleware('auth');

    Route::post('/admin/servicios/{id}/eliminar', [\App\Http\Controllers\ServiciosController::class, 'destruir_servicio'])
        ->name('servicios.confirmar-eliminar')
        ->middleware('auth');

    //-------------------------------------------------------------------------------------------ABM Novedades
    Route::get('/admin/novedades', [\App\Http\Controllers\NewsController::class, 'admin_novedades'])
        ->name('novedades.admin')
        ->middleware('auth');

    Route::get('/admin/novedades/publicar', [\App\Http\Controllers\NewsController::class, 'crear'])
        ->name('novedades.crear')
        ->middleware('auth');

    Route::post('/admin/novedades/publicar', [\App\Http\Controllers\NewsController::class, 'almacenar'])
        ->name('novedades.guardar')
        ->middleware('auth');

    Route::get('/admin/novedades/{id}/editar', [\App\Http\Controllers\NewsController::class, 'editar'])
        ->name('novedades.editar')
        ->middleware('auth');

    Route::post('/admin/novedades/{id}/editar', [\App\Http\Controllers\NewsController::class, 'actualizar'])
        ->name('novedades.actualizar')
        ->middleware('auth');

    Route::get('/admin/novedades/{id}/eliminar', [\App\Http\Controllers\NewsController::class, 'eliminar'])
        ->name('novedades.eliminar')
        ->middleware('auth');

    Route::post('/admin/novedades/{id}/eliminar', [\App\Http\Controllers\NewsController::class, 'destruir'])
        ->name('novedades.confirmar-eliminar')
        ->middleware('auth');
});

//---------------------------------------------------------------------------------------------Inicio de sesión

Route::get('inicio-sesion', [\App\Http\Controllers\AuthController::class, 'showLogin'])
    ->name('auth.showLogin');

Route::post('inicio-sesion', [\App\Http\Controllers\AuthController::class, 'doLogin'])
    ->name('auth.doLogin');

Route::post('cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logout'])
    ->name('auth.logout');
