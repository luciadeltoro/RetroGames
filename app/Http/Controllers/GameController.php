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
            'image' => '/images/SuperMarioBros.jpg'
        ],
        2 => [
            'id' => 2,
            'titulo' => 'Sonic the Hedgehog',
            'plataforma' => 'Mega Drive',
            'anio' => 1991,
            'descripcion' => 'Velocidad y acción con la mascota de SEGA.',
            'image' => '/images/SonictheHedgehog.jpg'
        ],
        3 => [
            'id' => 3,
            'titulo' => 'The Legend of Zelda',
            'plataforma' => 'NES',
            'anio' => 1986,
            'descripcion' => 'Una aventura épica llena de exploración.',
            'image' => '/images/TheLegendofZelda.png'
        ],
        4 => [
        'id' => 4,
        'titulo' => 'Pokémon Red & Blue',
        'plataforma' => 'Game Boy',
        'anio' => 1996,
        'descripcion' => '¡Atrápalos a todos! Inicia tu aventura Pokémon en Kanto.',
        'image' => '/images/PokemonRed.jpg'
         ],
         5 => [
        'id' => 5,
        'titulo' => 'Animal Crossing',
        'plataforma' => 'Nintendo 64 / GameCube',
        'anio' => 2001,
        'descripcion' => 'Crea tu propio pueblo y vive una vida tranquila con animales simpáticos.',
        'image' => '/images/AnimalCrossing.png'
        
         ],
         6 => [
        'id' => 6,
        'titulo' => 'Super Smash Bros',
        'plataforma' => 'Nintendo 64',
        'anio' => 1999,
        'descripcion' => 'Combate crossover con los personajes más icónicos de Nintendo en batallas frenéticas.',
        'image' => '/images/SuperSmashBros.jpg'
        
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
