<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    //
    public function index(){
        
        $tasks = Task::all();
        //$tasks = DB::table('tasks')->get(); 
        return view('task.index',compact('tasks'));
    }

    public function create(){
        return view('task.create');
    }

    public function store(TaskRequest $request){
        
        $validatedData = $request->validated();
        Task::created($validatedData);
        
        //DB::table('task')->insert($validatedData);
        return redirect('/task');
        //return view('task.create');
    }

    public function show(Task $task)
    {
        return view('task.show',compact('task'));
    }
}
