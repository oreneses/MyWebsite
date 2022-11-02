<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\SaveProjectRequest;

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

    // Almacenamos proyecto (FormRequest)
    public function store(SaveProjectRequest $request){
        Project::create($request->validated());
        return redirect()->route('projects.index');
    }
    
    // Editamos proyecto
    public function edit(Project $project){
        return view('projects.edit',[
            'project' => $project
        ]);
    }

    // Actualizamos proyecto
    public function update(Project $project, SaveProjectRequest $request){
        $project->update($request->validated());
        return redirect()->route('projects.show', $project);
    }

    // Eliminamos proyecto
    public function delete(Project $project){
        $project->delete();
        return redirect()->route('projects.index');
    }

}
