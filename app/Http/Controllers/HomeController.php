<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Student;

class HomeController extends Controller
{
    public function Student(){

        $grades = Grade::all();
        $student = Student::all();
        return view('pages.students',compact('grades','student'));
    }
    public function Attendance(){
        return view('pages.attendance');
    }

    public function Show(){
        return view('pages.show_table');
    }
}
