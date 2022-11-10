@extends('layout')

@section('title', 'Contact')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                
            @if(session('status'))
                {{ session('status') }}
                <a href="{{ route('home') }}">Volver a inicio</a>
            @else
                <form class="bg-white shadow rounded p-3" action="{{route('contactForm')}}" method="post">
                    @csrf
                    <h1 class="display-4">  @lang('Contact')  </h1><br>
                    <div class="form-group">
                        <label class="px-2 py-1" for="name"> Nombre</label>
                        <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-1 @enderror"
                            name="name" 
                            placeholder="Escribe aquí tu nombre..." 
                            value="{{ old('name')}}">
                            {!! $errors->first('name', '<small style="color:red">:message</small><br>') !!}
                    </div>
                    <div class="form-group">
                        <label class="px-2 py-1" for="email">Email</label>
                        <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-1 @enderror"
                            name="email" 
                            placeholder="Escribe aquí tu email..." 
                            value="{{ old('email')}}">
                            {!! $errors->first('email', '<small style="color:red">:message</small><br>') !!}
                    </div>
                    <div class="form-group">
                        <label class="px-2 py-1" for="subject">Asunto</label>
                        <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-1 @enderror"
                            name="subject" 
                            placeholder="Escribe aquí el asunto de tu mensaje..." 
                            value="{{ old('subject')}}">
                            {!! $errors->first('subject', '<small style="color:red">:message</small><br>') !!}
                    </div>
                    <div class="form-group">
                        <label class="px-2 py-1" for="content">Contenido</label>
                        <textarea class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-1 @enderror"
                            name="content"
                            placeholder="Escribe aquí el contenido de tu mensaje..." 
                            value="{{ old('content')}}"></textarea>
                            {!! $errors->first('content', '<small style="color:red">:message</small><br>') !!}
                    </div>
                    
                    <div class="form-group" style="margin-top: 15px">
                        <button class="btn btn-primary btn-lg btn-block py-1" type="submit">@lang('Send')</button>
                    </div>
                </form>
            @endif
            </div>
        </div>

    </div>
@endsection

