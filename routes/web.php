<?php
use App\Http\Controllers\GameController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ruta lista general de juegos
Route::get('/games', [GameController::class, 'index']);

// Ruta ficha de un juego
Route::get('/games/{id}', [GameController::class, 'show']);
