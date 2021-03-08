<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index(){

        return Task::All();
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required|max:255',
            'complete'=>'required'
        ]);

        $task = Task::create([
            'name'=>$request->input('name'),
            'complete'=>$request->input('complete')
        ]);
        
        return $task;
    }

    public function show(Task $task){

        return $task;
    }

    public function update(Task $task, Request $request){

        $request->validate([
            'name'=>'required|max:255'
        ]);

        $task->name = $request->input('name');

        $task->save();

        return $task;
    }

    public function delete(Task $task){

        $task->delete();

        return response()->json(['sucess'=>true]);
    }
}
