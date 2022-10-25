<?php

namespace App\Http\Controllers;


class ContactFormController extends Controller
{
    public function store(){
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);
        
        return 'Datos validados';
    }
}
