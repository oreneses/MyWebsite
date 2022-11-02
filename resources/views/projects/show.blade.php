@extends('layout')

@section('title', $project->title)

@section('content')
    <h1>{{$project->title}}</h1>
    <p>{{$project->description}}</p>
    <small>{{$project->created_at->diffForHumans()}}</small>
    <br><br>
    <div>
        <a href="{{ route('projects.edit', $project) }}">Editar proyecto</a>
        <a href="{{route('projects.index')}}" style="margin-left: 20px">Volver</a>
        <form action="{{route('projects.delete', $project)}}" method="post">
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    </div>
@endsection