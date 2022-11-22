<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProfileRequest;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{

    // Creamos perfil
    public function index(){
        if (isset(auth()->user()->id)) {
            $profiles = Profile::get()->where('idUser', auth()->user()->id);
            return view('profile.index', compact('profiles'));
        }else {
            $profiles = Profile::get();
            return view('profile.index', compact('profiles'));
        }
    }

    // Creamos perfil
    public function create(){
        return view('profile.create');
    }

    // Mostramos perfil
    public function show(Profile $profile){
        $profiles = Profile::get()->where('idUser',1);
        return view('profile.about', ['profiles'=>$profiles]);
    }

    //Almacenamos perfil (FormRequest)
    public function store(SaveProfileRequest $request){
        Profile::create($request->validated());
        return redirect()->route('profile.index')->with('status', 'Tu perfil se ha creado correctamente.');
    }
}
