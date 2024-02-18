<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
    public function viewAdmin() :View{
        return view('Userview/adminsubject');
    }

    public function viewTeacher() :View{
        return view('Userview/teachersubject');
    }

    public function viewStudent() :View{
        return view('Userview/studentsubject');
    }
}
