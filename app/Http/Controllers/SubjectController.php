<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
    public function viewAdmin() {
        return view('Userview/adminsubject');
    }

    public function viewTeacher() {
        return view('Userview/teachersubject');
    }

    public function viewStudent() {
        return view('Userview/studentsubject');
    }
}
