@extends('layout')

@section('title', 'Crear proyecto')

@section('content')
    <h1>@lang('Create a new project')</h1>

    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <label>
            Titulo del proyecto <br>
            <input type="text" name="title">
        </label><br>
        <label>
            Descripcion del proyecto <br>
            <textarea type="textarea" name="description"></textarea>
        </label><br>
        <button> GUARDAR </button>
    </form>

@endsection