@extends('layout')

@section('title', 'Perfil')


@section('content')
    <div class="container">
        <div class="d-flex align-items-center">
            @auth
                <p class="display-5 px-4 mb-4"> Perfil creado en MyWebsite:  </p>
            @else
                <p class="display-5 px-4 mb-4"> Perfiles creados en MyWebsite:  </p>
            @endauth    
            
        </div>
        <ul>
            @forelse ($profiles as $profile)
            <li class="list-group-item mb-3 mt-4 shadow-sm">
                
                <div class="card">
                    <div class="card-header mt-1">
                        <h6>{{$profile->name}} {{$profile->surnames}}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <p> <strong>Correo:</strong> {{$profile->email}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <p> <strong>Telefono:</strong>  {{$profile->phone}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <p> <strong>Fecha de nacimiento:</strong>  {{$profile->date_of_birth}} </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <p> <strong>Localidad:</strong>  {{$profile->residence}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <p> <strong>Puesto:</strong>  {{$profile->job}}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <p> <strong>Modalidad:</strong>  {{$profile->modality}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-9 col-md-12">
                                        <p> <strong>LinkedIn:</strong>  <a href="{{$profile->linkedIn}}">{{$profile->linkedIn}}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @empty
            <li class="list-group-item border-0 mb-3 shadow-sm">
                No se ha creado ningún perfil.
            </li>
            @auth
            <div class="px-4 py-4">
                <a class="btn btn-primary border-0" style="background-color: #38B2AC" href="#">
                    Crear perfil
                </a><br>
            </div>
            @endauth
            @endforelse
        </ul>
    </div>
@endsection


{{-- 
@section('content')

INDEX PROFILE

<a href="{{ route('profile.create') }}">Crear perfil</a>
@forelse ($profiles as $profile)
<p>{{$profile->name}}</p>
<p>{{$profile->surnames}}</p>
<p>{{$profile->phone}}</p>
<p>{{$profile->date_of_birth}}</p>
<p>{{$profile->residence}}</p>
<p>{{$profile->job}}</p>
<p>{{$profile->modality}}</p>
<p>{{$profile->linkedIn}}</p>
@empty
    
@endforelse


@endsection --}}