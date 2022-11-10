@extends('layout')

@section('title', 'Home') <!-- No es necesario cerrar la section si pasamos un segundo parametro -->

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary"> Bienvenido! </h1>
            <p class="lead text-secondary text-justify py-4">
                Este es un sitio web donde los usuarios tienen la opción de registrarse y poder presentarse de cara
                a las empresas. Además, también cuenta con la opción de adjuntar proyectos realizados y subidos a Github. Una vez
                se hayan visualizado los proyectos que tiene dicho usuario, se podrá enviar un mensaje que le llegará a su bandeja
                de gmail y de esa forma contactar con él para proponerle cualquier oferta de trabajo relacionada con sus proyectos.
            </p>
            {{-- <a class="btn btn-lg btn-block btn-primary border-0" href="{{route('contact')}}" style="background-color: #38B2AC;">Contacto</a>
            <a class="btn btn-lg btn-block btn-outline-primary border-0" href="{{route('projects.index')}}" style="color: #38B2AC;">Ir a proyectos</a> --}}
            {{-- @auth
                {{ auth()->user()->name }}
            @endauth --}}
        </div>
        <div class="col-lg-6">
            <img class="img-fluid mt-4" src="/img/home.svg" alt="Desarrollo Web">
        </div>
    </div>
    <div class="row py-3">
        <div class="text-center py-5">
            <a class="nav-link" href="{{route('projects.index')}}" style="color: #38B2AC;">Ir a los proyectos</a>
        </div>
    </div>
</div>
@endsection