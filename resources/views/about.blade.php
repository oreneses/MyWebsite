@extends('layout')

@section('title', 'About')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary"> Quién soy </h1>
            <p class="lead text-secondary text-justify">
                testtestest tes teste t ete tetetesttestest tes teste t ete tetetesttestest tes teste t ete tete
                testtestest tes teste t ete tetetesttestest tes teste t ete tetetesttestest tes teste t ete tete
                testtestest tes teste t ete tetetesttestest tes teste t ete tetetesttestest tes teste t ete tete
                testtestest tes teste t ete tetetesttestest tes teste t ete tetetesttestest tes teste t ete tete
            </p>
            <a class="btn btn-lg btn-block btn-primary" href="{{route('contact')}}">Contacto</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('projects.index')}}">Ir a proyectos</a>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid mt-4" src="/img/about.svg" alt="Quién soy">
        </div>
    </div>
</div>
@endsection