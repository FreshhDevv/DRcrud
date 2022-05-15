<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function AddStudent()
    {
        $classes = StudentClass::all();
        return view('student.create_student', compact('classes'));
    }

    public function StoreStudent(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'class_id' => 'required',
                'email' => 'required',
                'number' => 'required',
            ],
            [
                'name.required' => 'The Student Name is required',
                'class_id.required' => 'The Student Class is required',
                'email.required' => 'The Student Email is required',
                'number.required' => 'The Student Number is required',
            ]
        );


        Student::insert([
            'name' => $request->name,
            'class_id' => $request->class_id,
            'email' => $request->email,
            'number' => $request->number,
        ]);

        $notification = array(
            'message' => 'Student Added Successfully',
            'alert-type' => 'success'
        );
        return redirect('/');
    }

    public function EditStudent($id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit_student', compact('student'));
    }

    public function UpdateStudent(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $input = $request->all();
        $student->update($input);
        return redirect('/');
    }

    public function DeleteStudent($id)
    {
        Student::findOrFail($id)->delete();
        return redirect('/');
    }
}
