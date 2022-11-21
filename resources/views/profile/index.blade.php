@extends('layout')

@section('title', 'Perfil')

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


@endsection