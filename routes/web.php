<?php

use Illuminate\Support\Facades\Route;


Route::get('/inicio', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/quienes-somos', [\App\Http\Controllers\AboutController::class, 'index']);

Route::get('/servicios', [\App\Http\Controllers\ServiciosController::class, 'index']);

Route::get('/novedades', [\App\Http\Controllers\NewsController::class, 'index']);

Route::get('/novedades/{id}', [\App\Http\Controllers\NewsController::class, 'show'])->whereNumber('id');

Route::get('/admin/novedades', [\App\Http\Controllers\NewsController::class, 'admin_novedades']);

Route::get('/admin/novedades/publicar', [\App\Http\Controllers\NewsController::class, 'create']);
Route::post('/admin/novedades/publicar', [\App\Http\Controllers\NewsController::class, 'store']);

Route::get('/admin/novedades/{id}/eliminar', [\App\Http\Controllers\NewsController::class, 'eliminar']);
Route::post('/admin/novedades/{id}', [\App\Http\Controllers\NewsController::class, 'destruir']);

Route::get('/contactanos', [\App\Http\Controllers\ContactUsController::class, 'index']);