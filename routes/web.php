<?php

use Illuminate\Support\Facades\Route;

Route::get('/novedades', function () {
    return view('novedades');
});

Route::get('/inicio', function () {
    return view('home');
});

Route::get('/quienes-somos', function () {
    return view('quienes_somos');
});

Route::get('/contactanos', function () {
    return view('contactanos');
});