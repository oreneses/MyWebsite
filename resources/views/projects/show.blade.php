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
            <div class="btn-group btn-group-sm">
                <a class="btn" href="{{route('projects.index')}}">Volver</a>
            </div>
            @auth
                <form id="delete-project" clas="d-none" action="{{route('projects.delete', $project)}}" method="post">
                    @csrf @method('DELETE') 
                    <a class="btn" href="{{ route('projects.edit', $project) }}">Editar</a>
                    <button class="btn" style="color:red">Eliminar</button>
                </form>
            @endauth
        </div>
    </div>
    
</div>
@endsection