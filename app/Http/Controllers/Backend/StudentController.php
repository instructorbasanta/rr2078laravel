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
}
