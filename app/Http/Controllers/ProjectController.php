<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::get();
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project){
        return view('projects.show', ['project'=>$project]);
    }

    public function create(){
        return view('projects.create');
    }

    public function store(){
        $title = request('title');
        $description = request('description');

        $url = request('title');
        $urlFinal = strtolower(str_replace(' ', '-', $url));

        Project::create([
            'title' => $title,
            'url' => $urlFinal,
            'description' => $description
        ]);

        return redirect()->route('projects.index');
    }
    
}
