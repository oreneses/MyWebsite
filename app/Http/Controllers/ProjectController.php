<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::get();
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        // $project = Project::findOrFail($project);
        // return view('projects.show', compact('project'));
        return view('projects.show', ['project'=>$project]);
    }
    
}
