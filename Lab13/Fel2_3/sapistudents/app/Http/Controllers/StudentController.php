<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        //$students = Student::all();
        $students = Student::paginate(10);
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        Student::create($request->all());

        return redirect()->route('students.index')
            ->with('status','Student created successfully');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('status','Student updated successfully');
    }

    public function destroy(Student $student)
    {
        //$stud = Student::find($id);
        $student->delete();
        return redirect()->route('students.index')
            ->with('status', 'Student deleted successfully');
    }
}
