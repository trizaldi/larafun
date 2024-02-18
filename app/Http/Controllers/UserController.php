<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function viewAdmin() 
    {
        return view('Userview/adminuser');
    }

    public function viewTeacher() 
    {
        return view('Userview/teacheruser');
    }

    public function viewStudent() 
    {
        return view('Userview/studentuser');
    }
}
