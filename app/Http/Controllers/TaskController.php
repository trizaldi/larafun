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
        
        return view('task.index');
    }

    public function create(){
        return view('task.create');
    }

    public function store(TaskRequest $request){
        
        $validatedData = $request->validated();
        //Task::created($validatedData);
        
        DB::table('task')->insert($validatedData);
        return redirect('/task');
        //return view('task.create');
    }
}
