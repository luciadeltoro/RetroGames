@extends('layouts.app')

@section('titulo', $game['titulo'])

@section('contenido')
    @if ($game)
        <div class="bg-gray-800 rounded-xl shadow-lg max-w-4xl mx-auto flex flex-col md:flex-row overflow-hidden">
            
            <!-- Imagen de la carátula -->
            <div class="flex-shrink-0">
                <img src="{{ $game['imagen'] }}" alt="{{ $game['titulo'] }}" class="w-[250px] h-[360px] object-cover">
            </div>

            <!-- Información del juego -->
            <div class="p-6 flex flex-col justify-between">
                <div>
                    <h2 class="text-2xl font-bold text-white mb-2">{{ $game['titulo'] }}</h2>
                    <p class="text-gray-400 mb-1"><strong>Plataforma:</strong> {{ $game['plataforma'] }}</p>
                    <p class="text-gray-400 mb-4"><strong>Año:</strong> {{ $game['anio'] }}</p>
                    <p class="text-gray-200 mb-6">{{ $game['descripcion'] }}</p>
                </div>

                <!-- Botón volver al listado -->
                <div>
                    <a href="{{ route('games.index') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                        ← Volver al listado
                    </a>
                </div>
            </div>
        </div>
    @else
        <p>Juego no encontrado.</p>
        <a href="{{ route('games.index') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            ← Volver al listado
        </a>
    @endif
@endsection
