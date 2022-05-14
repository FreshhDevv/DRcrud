<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function AddStudent()
    {
        return view('student.create_student');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_message', 'Student Added');
    }

    public function show($id) 
    {
        $student = Student::findOrFail($id);
        return view('student.show', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'Student updated');
    }

    public function delete($id)
    {
        Student::findOrFail($id)->delete();
        return redirect('student')->with('flash_message', 'Student deleted');
    }
}
