<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
    public function AddClass(Request $request)
    {
        StudentClass::insert([
            'class' => $request->class,
        ]);
    }
}
