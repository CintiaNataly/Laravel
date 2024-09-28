<?php

use Illuminate\Support\Facades\Route;

Route::get('/inicio', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/quienes-somos', [\App\Http\Controllers\AboutController::class, 'index']);

Route::get('/novedades', [\App\Http\Controllers\NewsController::class, 'index']);

Route::get('/contactanos', [\App\Http\Controllers\ContactUsController::class, 'index']);