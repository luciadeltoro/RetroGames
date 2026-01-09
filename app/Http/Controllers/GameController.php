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
            'descripcion' => 'El clásico plataformas que marcó una época.',
            'imagen' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Super_Mario_Bros._box.png'
        ],
        2 => [
            'id' => 2,
            'titulo' => 'Sonic the Hedgehog',
            'plataforma' => 'Mega Drive',
            'anio' => 1991,
            'descripcion' => 'Velocidad y acción con la mascota de SEGA.',
            'imagen' => 'https://upload.wikimedia.org/wikipedia/en/b/ba/Sonic_the_Hedgehog_1_Genesis_box_art.jpg'
        ],
        3 => [
            'id' => 3,
            'titulo' => 'The Legend of Zelda',
            'plataforma' => 'NES',
            'anio' => 1986,
            'descripcion' => 'Una aventura épica llena de exploración.',
            'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdtErj47LMh_UCtsq7XjsDce-V-7NOW6VIvg&s'
        ],
        4 => [
            'id' => 4,
            'titulo' => 'Pokémon Rojo y Azul',
            'plataforma' => 'Game Boy',
            'anio' => 1996,
            'descripcion' => '¡Atrápalos a todos! Inicia tu aventura Pokémon en Kanto.',
            'imagen' => 'https://pics.filmaffinity.com/Pokaemon_Rojo_y_Azul-980440436-large.jpg'
        ],
        5 => [
            'id' => 5,
            'titulo' => 'Animal Crossing',
            'plataforma' => 'Nintendo 64 / GameCube',
            'anio' => 2001,
            'descripcion' => 'Crea tu propio pueblo y vive una vida tranquila con animales simpáticos.',
            'imagen' => 'https://upload.wikimedia.org/wikipedia/en/8/82/Animal_Crossing_Coverart.png'
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
