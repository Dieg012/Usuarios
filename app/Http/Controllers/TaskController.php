<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index($userId){
        return view('tasks', ['userId' => $userId]);
    }
    public function createTask(Request $request){
        Task::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'date' => $request->get('date'),
            'user_id' => $request->get('userId')
        ]);
        return redirect('/task/creator/' . $request->get('userId'));
    }
}
