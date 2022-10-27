<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(){
        $msg = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);
        
        Mail::to('reneses.test@gmail.com')->send(new MessageReceived($msg));

        return view('home');
    }
}
