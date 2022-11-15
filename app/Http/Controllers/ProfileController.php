<?php

namespace App\Http\Controllers;
use App\Http\Requests\SaveProjectRequest;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{

    // Creamos perfil
    public function index(){
        return view('profile.index');
    }

    // Creamos perfil
    public function create(){
        return view('profile.create');
    }

    // Mostramos perfil
    public function show(Profile $userProfile){
        return view('profile.about', ['nameUser'=>$userProfile]);
    }

    //Almacenamos perfil (FormRequest)
    public function store(SaveProjectRequest $request){
        Profile::create($request->validated());
        return redirect()->route('profile.about')->with('status', 'Tu perfil se ha creado correctamente.');
    }
}
