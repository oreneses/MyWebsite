<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\SaveProjectRequest;
// use App\Models\User;
// use Illuminate\Support\Facades\DB;


class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    // Obtenemos proyectos
    public function index(){
        if (isset(auth()->user()->id)) {
            $projects = Project::get()->where('idUser', auth()->user()->id);
            return view('projects.index', compact('projects'));
        }else{
            $projects = Project::get();
            return view('projects.index', compact('projects'));
        }
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
        return redirect()->route('projects.create')->with('status', 'Tu proyecto se ha creado correctamente.');
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
        return redirect()->route('projects.edit', $project)->with('status', 'Tu proyecto se ha actualizado correctamente.');;
    }

    // Eliminamos proyecto
    public function delete(Project $project){
        $project->delete();
        return redirect()->route('projects.index');
    }

}
