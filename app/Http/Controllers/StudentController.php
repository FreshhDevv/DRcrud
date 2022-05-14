<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function AddStudent()
    {
        return view('student.create_student');
    }

    public function StoreStudent(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'class' => 'required',
                'email' => 'required',
                'number' => 'required',
            ],
            [
                'name.required' => 'The Student Name is required',
                'class.required' => 'The Student Class is required',
                'email.required' => 'The Student Email is required',
                'number.required' => 'The Student Number is required',
            ]
        );

        StudentClass::insert([
            'class' => $request->class,
        ]);
        Student::insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
        ]);

        $notification = array(
            'message' => 'Student Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

        // $input = $request->all();
        // Student::create($input);
        // return redirect('student')->with('flash_message', 'Student Added');
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
