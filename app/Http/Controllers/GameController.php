<?php

namespace App\Http\Controllers;

class GameController extends Controller
{
    // Simulamos una base de datos con un array
    private $games = [
        1 => [
            'id' => 1,
            'titulo' => 'Super Mario Bros',
            'plataforma' => 'NES',
            'anio' => 1985,
            'descripcion' => 'El clásico plataformas que marcó una época.'
        ],
        2 => [
            'id' => 2,
            'titulo' => 'Sonic the Hedgehog',
            'plataforma' => 'Mega Drive',
            'anio' => 1991,
            'descripcion' => 'Velocidad y acción con la mascota de SEGA.'
        ],
        3 => [
            'id' => 3,
            'titulo' => 'The Legend of Zelda',
            'plataforma' => 'NES',
            'anio' => 1986,
            'descripcion' => 'Una aventura épica llena de exploración.'
        ],
    ];

    // Muestra la lista de juegos
    public function index()
    {
        return view('games.index', [
            'games' => $this->games
        ]);
    }

    // Muestra la ficha de un juego concreto
    public function show($id)
    {
        $game = $this->games[$id] ?? null;

        return view('games.show', [
            'game' => $game
        ]);
    }
}
