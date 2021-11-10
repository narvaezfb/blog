<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    //show all the tasks controller
    public function index(){

        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    //show task by id 
    // public function show($id){

    //     $task = Task::find($id);

    //     return view('tasks.show', compact('task'));
    // }


    // data binding
    public function show(Task $task){

        return view('tasks.show', compact('task'));
    }
}   
    