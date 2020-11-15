<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;

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
    //USER INFO AND TASKS
    public function mainPage(Request $request){
        //GET VALUES FROM DB
        $userEmail = $this->getEmail($request);
        $userPass = $this->getPass($request);
        
        if($request->email == $userEmail && $request->pass == $userPass){
            //GET ALL THE INFO FROM THE DB AND PASS TO THE VIEW
            //$tasks = User::where('email', $request->email)->tasks;
            $user = User::where('email', $request->email)->get();

            $userId = $this->getId($user);
            $tasks = User::find($userId)->tasks;
            return view('mainPage')->with(compact('tasks', 'user'));
            //return view('mainPage')->with('user', $user)->with('tasks', $tasks);
        }else{
            return redirect('/logIn');
        }
    }

    /*
    AUX METHODS
    */
    
    public function userExists(Request $request){
        if(User::where('email', $request->get('email'))->exists()){
            return true;
        }else{
            return false;
        }
    }
    public function getPass(Request $request){
        $userData = User::where('email', $request->get('email'))->get();
        foreach($userData as $userPass){
            return $userPass->password;
        }
    }
    public function getEmail(Request $request){
        $userData = User::where('email', $request->get('email'))->get();
        foreach($userData as $userEmail){
            return $userEmail->email;
        }
    }
    public function getId($user){
        foreach($user as $userData){
            return $userData->id;
        }
    }
}
