<script src="/js/app.js"></script>

@extends('layout')

@section('title', $project->title)

@section('content')
    <h1>Editar proyecto: {{ $project->title }}</h1><br>

    <form method="POST" action="{{ route('projects.update', $project) }}" onchange="autofillUrl()">
        @csrf @method('PATCH')
        <label>
            Titulo del proyecto <br>
            {{-- Agregamos el old() para que, en caso de que falle, no perder la informacion que habiamos puesto --}}
            <input type="text" name="title" id="title" value="{{ old('title', $project->title)}}"><br>
            {!! $errors->first('title', '<small>:message</small><br>') !!}
        </label><br>
        <label>
            URL del proyecto <br>
            <input type="text" id="url" name="url" value="{{ old('url', $project->url)}}"><br>
            {!! $errors->first('url', '<small>:message</small><br>') !!}
        </label><br>
        <label>
            Descripcion del proyecto <br>
            <textarea type="textarea" name="description">{{ old('description', $project->description)}}</textarea><br>
            {!! $errors->first('description', '<small>:message</small><br>') !!}
        </label><br>
        <button> ACTUALIZAR </button>
    </form>

@endsection
