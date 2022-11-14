<script>
    function autofillUrl(){
    var $url = document.getElementById('title').value;
    var $urlLowerCase = $url.toLowerCase();
    var $urlFinal = $urlLowerCase.replaceAll(' ', '-');
    document.getElementById('url').value=$urlFinal
    }
</script>
@extends('layout')

@section('title', $project->title)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-8 mx-auto">
            
            @if(session('status'))
                {{ session('status') }} <br>
                <a href="{{ route('home') }}">Volver a inicio</a>
            @else
                <form class="bg-white shadow rounded p-3" method="POST" action="{{ route('projects.update', $project) }}" onchange="autofillUrl()">
                    @csrf @method('PATCH')
                    <h1 class="display-6 mb-4">Editar proyecto: {{ $project->title }}</h1>
                    <div class="form-group">
                        <label class="px-2 py-2" for="title"> Título del proyecto </label>
                            <input class="form-control bg-light shadow-sm @error('title') is-invalid @else border-1 @enderror"
                                type="text" 
                                name="title" 
                                id="title"
                                value="{{ old('title', $project->title)}}">
                                {!! $errors->first('title', '<small style="color:red">:message</small><br>') !!}
                    <div>

                    <div class="form-group">
                        <label class="px-2 py-2" for="urlProject"> URL del proyecto </label>
                            <input class="form-control bg-light shadow-sm @error('urlProject') is-invalid @else border-1 @enderror"
                                type="text" 
                                name="urlProject" 
                                id="urlProject"
                                value="{{ old('url', $project->urlProject)}}">
                                {!! $errors->first('urlProject', '<small style="color:red">:message</small><br>') !!}
                    <div>    

                    <div class="form-group">
                        <label class="px-2 py-2" for="description"> Descripción del proyecto </label>
                            <textarea class="form-control bg-light shadow-sm @error('description') is-invalid @else border-1 @enderror"
                                type="textarea" 
                                name="description"> {{ old('description', $project->description)}} </textarea>
                                {!! $errors->first('description', '<small style="color:red">:message</small><br>') !!}
                    <div>

                    <div class="form-group" style="margin-top: 15px">
                        <button class="btn btn-primary btn-lg btn-block py-1"> Actualizar </button>
                        <a class="btn btn-link btn-block" href="{{route('projects.index')}}">Cancelar</a>
                    </div>   

                    <div class="form-group d-none">
                        <label class="px-2 py-2" for="url"> URL del proyecto </label>
                            <input class="form-control bg-light shadow-sm @error('url') is-invalid @else border-1 @enderror"
                                type="text" 
                                name="url" 
                                id="url"
                                placeholder="Escribe aquí la URL del proyecto...">
                                {!! $errors->first('url', '<small style="color:red">:message</small><br>') !!}
                    <div>

                    <div class="form-group d-none">
                            <input type="text" name="idUser" id="idUser" value="{{ auth()->user()->id }}">
                    <div>

                </form>
            @endif
        </div>
    </div>
</div>
@endsection
