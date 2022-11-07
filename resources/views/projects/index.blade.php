@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1> PORTFOLIO </h1><br>
    @auth
        <a href="{{route('projects.create')}}"> Crear proyecto </a><br>
    @endauth
    <ul>
        @forelse ($projects as $project)
            <a href="{{route('projects.show', $project)}}">{{ $project->title }}</a> <br>
        @empty
            <p>No hay proyectos para mostrar</p>
        @endforelse
        
    </ul>
@endsection