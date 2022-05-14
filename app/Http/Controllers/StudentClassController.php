<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
    public function StoreClass(Request $request)
    {
        $request->validate(
            [
                'class' => 'required',
               
            ],
            [
                'class.required' => 'The Class Name is required',
            ]
        );

        StudentClass::insertOrIgnore([
            'class' => $request->class,
            
        ]);
        
        return redirect()->back();
    }
}
