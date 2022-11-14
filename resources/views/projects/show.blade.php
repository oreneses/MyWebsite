@extends('layout')

@section('title', $project->title)

@section('content')
<div class="container">
    <h1 class="mb-5 display-4 px-2">{{$project->title}}</h1>
    <div class="bg-white p-1 shadow rounded col-md-12">
        <p class="text-secondary">{{$project->description}}</p>
        <p class="text-secondary">
            URL del proyecto: <a href="{{$project->urlProject}}" class="text-secondary py-2">{{$project->urlProject}}</a>
        </p>
        <p class="text-black-50 mt-3">{{$project->created_at->diffForHumans()}}</p>
        <div class="d-flex justify-content-between align-items-center">
            @auth
                <form id="delete-project" clas="d-none" action="{{route('projects.delete', $project)}}" method="post">
                    @csrf @method('DELETE')
                </form>
            @endauth
        </div>
    </div>
    <div class="btn-group btn-group-sm">
        <a class="btn" href="{{route('projects.index')}}">Volver</a>
        @auth
            <a class="btn" href="{{ route('projects.edit', $project) }}">Editar</a>
            <a class="btn" style="color: red" href="{{route('projects.index')}}" 
                onclick="document.getElementById('delete-project').submit()">
                Eliminar
            </a>
        @endauth
    </div>
</div>
@endsection