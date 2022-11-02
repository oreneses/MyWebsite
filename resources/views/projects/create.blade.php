<script src="/js/app.js"></script>

@extends('layout')

@section('title', 'Crear proyecto')

@section('content')
    <h1>@lang('Create a new project')</h1>

    <form method="POST" action="{{ route('projects.store') }}" onchange="autofillUrl()">
        @csrf
        <label>
            Titulo del proyecto <br>
            <input type="text" name="title" id="title"><br>
            {!! $errors->first('title', '<small>:message</small><br>') !!}
        </label><br>
        <label>
            URL del proyecto <br>
            <input type="text" id="url" name="url"><br>
            {!! $errors->first('url', '<small>:message</small><br>') !!}
        </label><br>
        <label>
            Descripcion del proyecto <br>
            <textarea type="textarea" name="description"></textarea><br>
            {!! $errors->first('description', '<small>:message</small><br>') !!}
        </label><br>
        <button> GUARDAR </button>
    </form>

@endsection