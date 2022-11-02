<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\CreateProjectRequest;

class ProjectController extends Controller
{
    // Obtenemos proyectos
    public function index(){
        $projects = Project::get();
        return view('projects.index', compact('projects'));
    }

    // Mostramos los detalles de un proyecto especifico
    public function show(Project $project){
        return view('projects.show', ['project'=>$project]);
    }

    // Creamos proyectos
    public function create(){
        return view('projects.create');
    }

    // Almacenamos proyectos (FormRequest)
    public function store(CreateProjectRequest $request){
        Project::create($request->validated());
        return redirect()->route('projects.index');
    }
    
}
