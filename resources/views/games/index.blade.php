@extends('layouts.app')

@section('titulo', 'Listado de videojuegos')

@section('contenido')
    <h2 class="text-2xl font-bold mb-8">RetroGames Hub</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 justify-items-center">
        @foreach ($games as $game)
            <a href="{{ route('games.show', $game['id']) }}" class="block bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:scale-105 transform transition duration-300 w-[250px]">
                <img src="{{ $game['imagen'] }}" alt="{{ $game['titulo'] }}" class="w-full h-[360px] object-cover">
                
                <div class="p-4 text-center">
                    <h3 class="text-lg font-semibold text-white mb-1">{{ $game['titulo'] }}</h3>
                    <p class="text-gray-400 text-sm">{{ $game['plataforma'] }} - {{ $game['anio'] }}</p>
                </div>
            </a>
        @endforeach
    </div>
@endsection
