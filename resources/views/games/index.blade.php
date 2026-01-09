@extends('layouts.app')

@section('titulo', 'Listado de videojuegos')

@section('contenido')
    <h2>Lista de videojuegos retro</h2>
    <p>Selecciona una carátula para ver la ficha del juego.</p>

    <div class="game-grid">
        @foreach ($games as $game)
            @php $img = $game['image'] ?? asset('images/default-cover.png'); @endphp
            <div class="game-card">
                <a href="/games/{{ $game['id'] }}">
                    <div class="cover-wrapper">
                        <img src="{{ $img }}" alt="{{ $game['titulo'] }} cover" class="game-cover">
                    </div>
                    <div class="game-title">{{ $game['titulo'] }}
                        <div style="font-weight:400;font-size:0.9rem;color:#6b7280">{{ $game['plataforma'] }} • {{ $game['anio'] }}</div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
