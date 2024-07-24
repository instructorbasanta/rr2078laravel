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
            'email' => 'required|email',
            'file_photo' => 'required|min:1|max:10000|mimes:jpg,jpeg,bmp,png'
        ]);
        if ($request->hasFile('file_photo')){
            $file = $request->file('file_photo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move('assets/images/student',$fileName);
            $request->request->add(['photo' => $fileName]);
        }
        if(Student::create($request->all())){
            request()->session()->flash('success','Student created successfully');
        } else {
            request()->session()->flash('error','Student creation failed');
        }
        return redirect()->route('backend.student.index');
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

    function edit($id){
        $student = Student::findOrFail($id);
        return view('backend.student.edit',compact('student'));
    }

    function update(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);
        $student = Student::findOrFail($id);
        if($student->update($request->all())){
            request()->session()->flash('success','Student updated successfully');
        } else {
            request()->session()->flash('error','Student update failed');
        }
        return redirect()->route('backend.student.index');
    }
}
