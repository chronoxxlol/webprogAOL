<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;


class StudentController extends Controller
{
    
    public function index(Request $request)
{
    $searchQuery = $request->input('query');

    $students = Student::latest()->when($searchQuery, function ($query) use ($searchQuery) {
        $query->where('name', 'like', '%' . $searchQuery . '%');
    })->paginate(20);

    return view('students.index', compact('students', 'searchQuery'));
}

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        // $students = Auth::user()->students();

        // Validate request data
        $val = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $students = new Student();
        $students->name = $val['name'];
        $students->email = $val['email'];
        $students->phone = $val['phone'];
        $students->save();

        // Create a new student associated with the authenticated user
        // Auth::user()->student->create($request->all());
            return redirect()->route('students.index')
                ->with('success', 'Student created successfully.');
    }

    public function edit(Student $student)
    {
        // $this->authorize('update', $student);

        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        // $this->authorize('update', $student);

        // Validate request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        // Update the student with the new data
        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
{
    $student = Student::findOrFail($id);
    $student->delete();

    return redirect()->route('students.index')
        ->with('success', 'Student deleted successfully.');
}
}
