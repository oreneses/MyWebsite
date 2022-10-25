<?php

namespace App\Http\Controllers;


class ContactFormController extends Controller
{
    public function store(){
        return request('name');
    }
}
