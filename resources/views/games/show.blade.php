@extends('layouts.app')

@section('titulo', $game['titulo'])

@section('contenido')
    @if ($game)
        <h2>{{ $game['titulo'] }}</h2>

        @php $img = $game['image'] ?? asset('images/default-cover.png'); @endphp
        <div style="max-width:520px;margin:18px auto;text-align:center;">
            <img src="{{ $img }}" alt="{{ $game['titulo'] }} cover" class="detail-cover">
        </div>

        <p><strong>Plataforma:</strong> {{ $game['plataforma'] }}</p>
        <p><strong>Año:</strong> {{ $game['anio'] }}</p>

        <p>{{ $game['descripcion'] }}</p>

        <a href="/games" class="back-link">← Volver al listado</a>
    @else
        <p>Juego no encontrado.</p>
        <a href="/games">← Volver al listado</a>
    @endif
@endsection
