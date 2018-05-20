<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class StudentController extends Controller
{
    //
    function homepage(){
        $allStudent = Student::all();
        Return view('index')->with('allStudent', $allStudent);
    }
    function addNew(){
        $student = new Student();
        $student -> rollNumber = Input::get('rollNumber');
        $student -> name = Input::get('name');
        $student -> phone = Input::get('phone');
        $student -> email = Input::get('email');
        $student -> save();
        return view('successful') ->with('type', 'Add new student') ->with('student', $student) -> with('result', 'successfully');
    }
    function delete(){
        $student
    }
}
