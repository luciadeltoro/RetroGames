@extends('layouts.app')

@section('titulo', 'Listado de videojuegos')

@section('contenido')
    <h2>🎮 Lista de videojuegos retro</h2>

    <ul>
        @foreach ($games as $game)
            <li>
                <strong>{{ $game['titulo'] }}</strong>
                ({{ $game['plataforma'] }} - {{ $game['anio'] }})
                —
                <a href="/games/{{ $game['id'] }}">Ver ficha</a>
            </li>
        @endforeach
    </ul>
@endsection
