<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //to display insert form
    function create(){
        return view('backend.student.create');
    }

    function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);
//        dd($request->all());
        Student::create($request->all());
    }

    function index(){
        $students = Student::orderBy('name')->get();
        //send data from controller to view
        return view('backend.student.index',compact('students'));
    }

    function show($id){
        $student = Student::findOrFail($id);
        return view('backend.student.show',compact('student'));
    }

    function  destroy($id){
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('backend.student.index');
    }
}
