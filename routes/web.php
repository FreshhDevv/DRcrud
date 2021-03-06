<?php

use App\Http\Controllers\StudentClassController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use App\Models\StudentClass;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // $classes = StudentClass::all();
    $students = Student::latest()->get();
    return view('student.index', compact('students'));
}); 

Route::prefix('student')->group(function(){
    Route::get('/add', [StudentController::class, 'AddStudent'])->name('student.add');

    Route::post('/store', [StudentController::class, 'StoreStudent'])->name('student.store');

    Route::post('/class/store', [StudentClassController::class, 'StoreClass'])->name('class.store');

    Route::get('/edit/{id}',[StudentController::class, 'EditStudent'])->name('student.edit');

    Route::post('/update/{id}', [StudentController::class, 'UpdateStudent'])->name('student.update');

    Route::get('/delete/{id}', [StudentController::class, 'DeleteStudent'])->name('student.delete');
});
