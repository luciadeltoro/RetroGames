@extends('layouts.app')

@section('titulo', $game['titulo'])

@section('contenido')
    @if ($game)
        <h2>{{ $game['titulo'] }}</h2>

        <p><strong>Plataforma:</strong> {{ $game['plataforma'] }}</p>
        <p><strong>Año:</strong> {{ $game['anio'] }}</p>

        <p>{{ $game['descripcion'] }}</p>

        <a href="/games">← Volver al listado</a>
    @else
        <p>Juego no encontrado.</p>
        <a href="/games">← Volver al listado</a>
    @endif
@endsection
