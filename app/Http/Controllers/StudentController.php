<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{
    public function index()
    {
        // Code to display a list of students
        $students = User::all();
        // dd($students);
        return view('students.index', compact('students'));
    }

    public function create()
    {
        // Code to show a form for creating a new student
        return view('students.create');
    }

    public function store(Request $request)
    {
        // Code to save a new student to the database
        return view('students.store');
    }

    public function show($id)
    {
        // Code to display a specific student
        return view('students.show');
    }

    public function edit($id)
    {
        // Code to show a form for editing a specific student
        return view('students.edit');
    }

    public function update(Request $request, $id)
    {
        // Code to update a specific student in the database
        return view('students.update');
    }

    public function destroy($id)
    {
        // Code to delete a specific student from the database
        return view('students.destroy');
    }


}
