<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function Addstudent(){
        return view('welcome');
    }

    public function save(Request $request){

        Student::create([
        'student_name' => $request->stuName,
        'student_email' => $request->stuEmail,
        'student_address' => $request->stuAddress,
        'student_dob' => $request->stuDob,
        ]);

        $notification = [
            "message" => "Student has been added"
        ];
        return Redirect()->back()-> with($notification);
    }
}
