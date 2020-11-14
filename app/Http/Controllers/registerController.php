<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function signIn(){
        return view('signIn');
    }

    public function logIn(){
        return view('logIn');
    }
}