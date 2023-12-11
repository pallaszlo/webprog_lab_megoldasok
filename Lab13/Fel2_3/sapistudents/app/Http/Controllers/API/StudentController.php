<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return StudentResource::collection($students);
    }

    public function show(Student $student)
    {
        return new StudentResource($student);
    }

    public function store(Request $request)
    {
        $stud = new Student([
            'name' => $request->input('name'),
            'email'=> $request->input('email'),
        ]);

        $stud->save();
        return new StudentResource($stud);
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return new StudentResource($student);
    }

}
