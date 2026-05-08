<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function index(){
        $students=Student::all();
        return view('home',compact('students'));
    }
    function create(){
        return view('add_student');
    }
    function store(Request $req){
        $req->validate(['name'=>'required','email'=>'required','age'=>'required']);
        Student::create($req->all());
        return redirect('/');
    }
    function edit($id){
        $student=Student::find($id);
        return view('edit_student',compact('student'));
    }
    function update(Request $req,$id){
        $student=Student::find($id);
        $student->update($req->all());
        return redirect('/');
    }
    function delete($id){
        Student::find($id)->delete();
        return redirect('/');
    }
}
