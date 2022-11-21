@extends('layout')

@section('title', 'Mi perfil')

@section('content')
<div class="container">


    <figure class="px-3 py-3">
        <div class="row display-6">
            <p class="">Crea tu perfil</p> 
        </div><br>
        <blockquote class="blockquote">
          <p>Crea tu perfil para que las empresas sepan más acerca de ti, <cite>{{auth()->user()->name}}.</cite></p> 
        </blockquote>   
    </figure>


    <form class="bg-white shadow rounded p-3" 
        method="POST" 
        action="{{ route('profile.store') }}">
        
        @csrf

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
        <br>
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
        <br>
        <div class="row">
            <div class="col-md-4">
                <label class="px-2 py-2" for="job"> Puesto </label>
                    <input class="form-control bg-light shadow-sm @error('job') is-invalid @else border-1 @enderror"
                        type="text" 
                        name="job" 
                        id="job">
                    {!! $errors->first('job', '<small style="color:red">:message</small><br>') !!}
            </div>
            <div class="col-md-3">
                <label class="px-2 py-2" for="modality"> Modalidad </label>
                        <select class="form-control bg-light shadow-sm @error('modality') is-invalid @else border-1 @enderror"
                        type="radio" 
                        name="modality" 
                        id="modality">
                            <option value=""></option>
                            <option value="Remoto">Remoto</option>
                            <option value="Presencial">Presencial</option>
                            <option value="Híbrido">Híbrido</option>
                        </select>
                    {!! $errors->first('modality', '<small style="color:red">:message</small><br>') !!}
            </div>
            <div class="col-md-5">
                <label class="px-2 py-2" for="linkedIn"> URL LinkedIn </label>
                    <input class="form-control bg-light shadow-sm @error('linkedIn') is-invalid @else border-1 @enderror"
                        type="text" 
                        name="linkedIn" 
                        id="linkedIn">
                    {!! $errors->first('linkedIn', '<small style="color:red">:message</small><br>') !!}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group">
                <label class="px-2 py-2" for="presentation"> Descripción corta </label>
                    <textarea class="form-control bg-light shadow-sm @error('presentation') is-invalid @else border-1 @enderror"
                        type="text" 
                        name="presentation" 
                        id="presentation"> </textarea>
                        {!! $errors->first('presentation', '<small style="color:red">:message</small><br>') !!}
            <div>
        </div>
        <br>
        <div class="form-group" style="margin-top: 15px">
            <a class="btn btn-primary btn-lg btn-block py-1 border-0" style="background-color: #f7f7f7; color:#38b2ac" href="{{route('home')}}">Volver</a>
            <button class="btn btn-primary btn-lg btn-block py-1 border-0" style="background-color: #38b2ac" type="submit"> Guardar </button>
        </div>

        <div class="form-group d-none">
            <input type="text" name="idUser" id="idUser" value="{{ auth()->user()->id }}">
        <div>

    </form>
</div>
@endsection