<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
    public function index()
    {
        $classes = StudentClass::all();
        return view('student.index', compact('classes'));
    }
}
