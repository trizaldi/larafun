<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Request;

use App\Models\Task;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\TaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Requests\UpdateTaskRequestTaskRequest;

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
        
        //$time = date('Y-m-d H:i:s');
        $validatedData = $request->validated();
        //Task::created($validatedData);//orm query 1
        
        DB::table('tasks')->insert($validatedData); //2

        return redirect('/task');
        //return view('task.create');
    }

    public function show(Task $task)
    {
        return view('task.show',compact('task'));
    }

    public function edit(Task $task)
    {
        return view('task.edit',compact('task'));
    }

    public function update(UpdateTaskRequest $request, Task $task ){
        $validatedData = $request->validated();
        $task->update($validatedData);
        return redirect("/task/{$task->id}");
    }

    public function delete (Task $task){
        $task->delete();
        return redirect('/task');
    }
}
