@extends('layout')

@section('title', 'Home') <!-- No es necesario cerrar la section si pasamos un segundo parametro -->

@section('content')
    <h1> HOME </h1>
    @auth
        {{ auth()->user()->name }}
    @endauth
@endsection