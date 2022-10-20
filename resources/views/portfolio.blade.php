@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1> PORTFOLIO </h1>
    <ul>
        @forelse ($portfolio as $portfolioItem)
            <li>{{ $portfolioItem['title'] }}</li>
        @empty
            <p>No hay proyectos para mostrar</p>
        @endforelse
    </ul>
@endsection