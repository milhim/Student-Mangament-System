<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        //
        $students = Student::all();

        return response($students,200);
    }
    public function store(Request $request)
    {
        //
        $request->validate([
            'cne'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'age'=>'required',
            'speciality'=>'required',
        ]);
        $students = Student::create($request->all());

        return response($students,201);
    }
    public function show($id)
    {
        //
        $student = Student::findOrFail($id);

        return response($student,200);
    }

    public function update(Request $request,$id)
    {
        //
        $student = Student::findOrFail($id);
        $student->update($request->all());

        return response($student,200);
    }
    public function destroy($id)
    {
        //


        return response(Student::destroy($id),200);
    }
}
