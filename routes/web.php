<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;

Route::get('/saludo', function () {
    return view('saludo', ['nombre' => 'Invitado']);
});

Route::get('/usuario/{id}', [EjemploController::class, 'mostrarUsuario']);

Route::get('/buscar', [EjemploController::class, 'buscar']);