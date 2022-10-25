@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1> CONTACT </h1>
    <form action="{{route('contactForm')}}" method="post">
        @csrf
        <input name="name" placeholder="Nombre" value="{{ old('name')}}"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}
        <input name="email" type="email" placeholder="Email" value="{{ old('email')}}"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}
        <input name="subject" placeholder="Asunto" value="{{ old('subject')}}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}
        <textarea name="content" placeholder="Mensaje" value="{{ old('content')}}"></textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}
        <button type="submit">Enviar</button>
    </form>
@endsection