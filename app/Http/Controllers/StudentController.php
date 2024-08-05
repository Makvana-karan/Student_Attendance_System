<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{


    public function student_add(Request $request){

        $request->validate([
            'name' => 'required|alpha',
            'grade' => 'required|alpha',
            'address' => 'required|alpha',
            'contact' => 'required|numeric'
        ]);

        $student = new Student;
        $student->name = $request->name;
        $student->grade = $request->grade;
        $student->address = $request->address;
        $student->contact = $request->contact;
        $student->save();



        return redirect('/student')->with('status','Student added successfully');
    }

    // public function edit(Student $students){

    //     return view('manage.edit',['students'=>$students]);
    // }
}
