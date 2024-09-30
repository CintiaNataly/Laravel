<?php

use Illuminate\Support\Facades\Route;


Route::get('/inicio', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/quienes-somos', [\App\Http\Controllers\AboutController::class, 'index']);

Route::get('/servicios', [\App\Http\Controllers\ServiciosController::class, 'index']);

Route::get('/novedades', [\App\Http\Controllers\NewsController::class, 'index']);
Route::get('/novedades/{id}', [\App\Http\Controllers\NewsController::class, 'show'])->whereNumber('id');


Route::get('/admin/novedades', [\App\Http\Controllers\NewsController::class, 'admin_novedades']);
Route::get('/admin/novedades/publicar', [\App\Http\Controllers\NewsController::class, 'create']);

Route::get('/contactanos', [\App\Http\Controllers\ContactUsController::class, 'index']);