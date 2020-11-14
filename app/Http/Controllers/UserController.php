<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function createUser(Request $request){
        if($this->userExists($request)){
            return redirect('/signIn');   
        }else{
            User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => $request->get('pass')
            ]);
            return redirect('/logIn');
        }
    }
    public function userExists(Request $request){
        if(User::where('email', $request->get('email'))->exists()){
            return true;
        }else{
            return false;
        }
    }
    public function getPass($requestedEmail){
        $userData = User::where('email', $requestedEmail)->get();
        foreach($userData as $userPass){
            return $userPass->password;
        }
    }
    public function getEmail($requestedEmail){
        $userData = User::where('email', $requestedEmail)->get();
        foreach($userData as $userEmail){
            return $userEmail->email;
        }
    }

    public function mainPage(Request $request){
        //GET VALUES FROM FORM
        $requestedEmail = $request->get('email');
        $requestedPass = $request->get('pass');
        //GET VALUES FROM DB
        $userEmail = $this->getEmail($requestedEmail);
        $userPass = $this->getPass($requestedEmail);
        
        if($requestedEmail == $userEmail && $requestedPass == $userPass){
            //GET ALL THE INFO FROM THE DB AND PASS TO THE VIEW
            $user = User::where('email', $requestedEmail)->get();
            return view('mainPage', ['user' => $user]);
        }else{
            return redirect('/logIn');
        }
        
    }
}
