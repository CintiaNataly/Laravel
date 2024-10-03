<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;


Route::get('/inicio', [\App\Http\Controllers\HomeController::class, 'index'])
    ->name('inicio');

Route::get('/quienes-somos', [\App\Http\Controllers\AboutController::class, 'index'])
    ->name('quienes-somos');

Route::get('/servicios', [\App\Http\Controllers\ServiciosController::class, 'index'])
    ->name('servicios');

Route::get('/novedades', [\App\Http\Controllers\NewsController::class, 'index'])
    ->name('novedades');

Route::get('/novedades/{id}', [\App\Http\Controllers\NewsController::class, 'show'])
    ->whereNumber('id')
    ->name('novedades.show');

Route::get('/admin/novedades', [\App\Http\Controllers\NewsController::class, 'admin_novedades']);

Route::get('/admin/novedades/publicar', [\App\Http\Controllers\NewsController::class, 'crear'])
    ->name('novedades.crear');
Route::post('/admin/novedades/publicar', [\App\Http\Controllers\NewsController::class, 'almacenar'])
    ->name('novedades.guardar');

Route::get('/admin/novedades/{id}/editar', [\App\Http\Controllers\NewsController::class, 'editar'])
    ->name('novedades.editar');
Route::post('/admin/novedades/{id}/editar', [\App\Http\Controllers\NewsController::class, 'actualizar'])
    ->name('novedades.actualizar');

Route::get('/admin/novedades/{id}/eliminar', [\App\Http\Controllers\NewsController::class, 'eliminar'])
    ->name('novedades.eliminar');
Route::post('/admin/novedades/{id}/eliminar', [\App\Http\Controllers\NewsController::class, 'destruir'])
    ->name('novedades.confirmar-eliminar');

Route::get('/contactanos', [ContactUsController::class, 'index'])
    ->name('contactanos');
Route::post('/contactanos', [ContactUsController::class, 'contacto']);
