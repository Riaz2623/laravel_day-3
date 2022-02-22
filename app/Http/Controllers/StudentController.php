<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $students;

    public function index()
    {
        $this->student = new Student();
        $this->student->newStudent();
        return 'success';
//        $this->students = Student::getAllStudent();
//        return view('all',['students'=> $this->students]);



    }
}
