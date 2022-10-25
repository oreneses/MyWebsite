@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1> CONTACT </h1>
    <form action="{{route('contactForm')}}" method="post">
        @csrf
        <input name="name" placeholder="Nombre" value="Oriol"><br>
        <input name="email" type="email" placeholder="Email" value="oriol@hotmail.com"><br>
        <input name="subject" placeholder="Asunto" value="Aprendiendo formularios"><br>
        <textarea name="content" placeholder="Mensaje">Mensaje de prueba</textarea><br>
        <button type="submit">Enviar</button>
    </form>
@endsection