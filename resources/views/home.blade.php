@extends('layout')

@section('title', 'Home') <!-- No es necesario cerrar la section si pasamos un segundo parametro -->

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            @auth
            <h1 class="display-4 text-primary"> Bienvenid@! {{ auth()->user()->name }} </h1>
            @endauth
            @guest
            <h1 class="display-4 text-primary"> Bienvenid@!</h1>
            @endguest
            <p class="lead text-secondary text-justify py-4">
                Este es un sitio web donde los usuarios tienen la opción de registrarse y poder presentarse de cara
                a las empresas. Además, también cuenta con la opción de adjuntar links de proyectos realizados y subidos a Github. Una vez
                se hayan visualizado los proyectos que tiene dicho usuario, la persona interesada podrá enviar un mensaje al usuario.
                El usuario recibirá el correo en su bandeja de gmail y de esa forma podrán mantener la primera toma de contacto.
            </p>
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