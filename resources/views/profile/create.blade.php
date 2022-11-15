@extends('layout')

@section('title', 'Mi perfil')

@section('content')
<div class="container">
    <form class="bg-white shadow rounded p-3" 
        method="POST" 
        action="{{ route('profile.store') }}">
        
        @csrf

        <div class="row display-6">
            Crear perfil para: {{auth()->user()->name}}
        </div><br>

        <div class="row">
            <div class="col-md-6">
                <label class="px-2 py-2" for="name"> Nombre </label>
                    <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-1 @enderror"
                        type="text" 
                        name="name" 
                        id="name">
                    {!! $errors->first('name', '<small style="color:red">:message</small><br>') !!}
            </div>
            <div class="col-md-6">
                <label class="px-2 py-2" for="surnames"> Apellidos </label>
                    <input class="form-control bg-light shadow-sm @error('surnames') is-invalid @else border-1 @enderror"
                        type="text" 
                        name="surnames" 
                        id="surnames">
                    {!! $errors->first('surnames', '<small style="color:red">:message</small><br>') !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label class="px-2 py-2" for="phone"> Telefono </label>
                    <input class="form-control bg-light shadow-sm @error('phone') is-invalid @else border-1 @enderror"
                        type="text" 
                        name="phone" 
                        id="phone">
                    {!! $errors->first('phone', '<small style="color:red">:message</small><br>') !!}
            </div>
            <div class="col-md-4">
                <label class="px-2 py-2" for="date_of_birth"> Nacimiento </label>
                <input class="form-control bg-light shadow-sm @error('date_of_birth') is-invalid @else border-1 @enderror"
                        type="text" 
                        name="date_of_birth" 
                        id="date_of_birth"
                        placeholder="dd/mm/yyyy">
                    {!! $errors->first('date_of_birth', '<small style="color:red">:message</small><br>') !!}
            </div>
            <div class="col-md-4">
                <label class="px-2 py-2" for="residence"> Pais de residencia </label>
                    <input class="form-control bg-light shadow-sm @error('residence') is-invalid @else border-1 @enderror"
                        type="text" 
                        name="residence" 
                        id="residence">
                    {!! $errors->first('residence', '<small style="color:red">:message</small><br>') !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label class="px-2 py-2" for="job"> Puesto </label>
                    <input class="form-control bg-light shadow-sm @error('job') is-invalid @else border-1 @enderror"
                        type="text" 
                        name="job" 
                        id="job">
                {!! $errors->first('job', '<small style="color:red">:message</small><br>') !!}
            <div>
                <div class="col-md-4">
                <label class="px-2 py-2" for="job"> Puesto </label>
                    <input class="form-control bg-light shadow-sm @error('job') is-invalid @else border-1 @enderror"
                        type="text" 
                        name="job" 
                        id="job">
                {!! $errors->first('job', '<small style="color:red">:message</small><br>') !!}
            <div>
            <div class="col-md-4">
                <label class="px-2 py-2" for="remote"> Modalidad </label>
                    <select class="form-control bg-light shadow-sm @error('remote') is-invalid @else border-1 @enderror"
                        type="radio" 
                        name="remote" 
                        id="remote">
                        <option value="true">Remoto</option>
                        <option value="false">Presencial</option>
                    </select>
            <div>
        </div>

        <div class="row">
            <div class="form-group">
                <label class="px-2 py-2" for="url_linkedIn"> URL LinkedIn </label>
                    <input class="form-control bg-light shadow-sm @error('url_linkedIn') is-invalid @else border-1 @enderror"
                        type="text" 
                        name="url_linkedIn" 
                        id="url_linkedIn">
            <div>
        </div>

        <div class="row">
            <div class="form-group">
                <label class="px-2 py-2" for="presentation"> Descripción corta </label>
                    <textarea class="form-control bg-light shadow-sm @error('presentation') is-invalid @else border-1 @enderror"
                        type="text" 
                        name="presentation" 
                        id="presentation"> </textarea>
            <div>
        </div>

        <div class="form-group" style="margin-top: 15px">
            <button class="btn btn-primary btn-lg btn-block py-1"> Guardar </button>
        </div>

        <div class="form-group d-none">
            <input type="text" name="idUser" id="idUser" value="{{ auth()->user()->id }}">
        <div>

    </form>
</div>
@endsection

    {{-- <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary"> Quién soy </h1><br>
            <p class="lead text-secondary text-justify">
                testtestest tes teste t ete tetetesttestest tes teste t ete tetetesttestest tes teste t ete tete
                testtestest tes teste t ete tetetesttestest tes teste t ete tetetesttestest tes teste t ete tete
                testtestest tes teste t ete tetetesttestest tes teste t ete tetetesttestest tes teste t ete tete
                testtestest tes teste t ete tetetesttestest tes teste t ete tetetesttestest tes teste t ete tete
            </p>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('projects.index')}}">Ir a proyectos</a>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid mt-4" src="/img/about.svg" alt="Quién soy">
        </div>
    </div> --}}