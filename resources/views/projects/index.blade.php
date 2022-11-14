@extends('layout')

@section('title', 'Projects')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center">
            <h2 class="display-5 px-4 mb-3"> PROYECTOS </h2><br>
        </div><hr>
        <p class="lead text-secondary px-4 py-3">
            Proyectos realizados:
        </p><br>
        <ul>
            @forelse ($projects as $project)
            <li class="list-group-item border-0 mb-3 shadow-sm">
                <a class="d-flex justify-content-between align-items-center nav-link" href="{{route('projects.show', $project)}}">
                    <span class="font-weight-bold">
                        <?php
                            $results = DB::select('select * from users where id = '.$project->idUser);
                            print_r($results[0]->{'name'});
                        ?>
                    </span>
                    <span class="font-weight-bold">
                        {{ $project->title }}
                    </span>
                    <span class="text-black-50">
                        {{ $project->created_at->format('d/m/Y')}}
                    </span>
                </a>
                <hr>
            </li>
            @empty
            <li class="list-group-item border-0 mb-3 shadow-sm">
                No hay proyectos para mostrar
            </li>
            @endforelse
        </ul>
        @auth
        <div class="px-4 py-4">
            <a class="btn btn-primary border-0" style="background-color: #38B2AC" href="{{route('projects.create')}}">
                Crear proyecto
            </a><br>
        </div>
        @endauth
    </div>
@endsection


