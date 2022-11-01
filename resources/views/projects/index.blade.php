@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1> PORTFOLIO </h1><br>
    <a href="{{route('projects.create')}}"> Crear proyecto </a><br>
    <ul>
        @forelse ($projects as $project)
            <a href="{{route('projects.show', $project)}}">{{ $project->title }}</a> <br>
        @empty
            <p>No hay proyectos para mostrar</p>
        @endforelse
        
    </ul>
@endsection