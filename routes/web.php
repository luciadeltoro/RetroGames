<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

// Listado de juegos (home)
Route::get('/', [GameController::class, 'index'])->name('games.index');

// Ficha de un juego
Route::get('/games/{id}', [GameController::class, 'show'])->name('games.show');
