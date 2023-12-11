<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('students', function (){
    $students = \App\Models\Student::all();
    foreach ($students as $student){
        echo $student->name . "<br>";
    }
});

Route::get('students/{id}', function ($id){
    $student = \App\Models\Student::find($id);
    echo $student;
});
*/

Route::get('students', [StudentController::class, 'index'])->name('students.index');
Route::get('students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
Route::get('students/{student}', [StudentController::class, 'show']);
Route::get('students/edit/{student}',[StudentController::class, 'edit'])->name('students.edit');
Route::post('students/edit/{student}',[StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

