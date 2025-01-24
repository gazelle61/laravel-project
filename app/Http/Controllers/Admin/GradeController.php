<?php

namespace App\Http\Controllers\Admin;

use App\Models\Grade;
use App\Models\Student;
use App\Models\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GradeController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::with('grade')->latest()->get();
        return view('admin.grade.index2', compact('grades'), [
            'title' => "Grades",
            'grades' => $grades
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.grade.create', [
            "title" => "Create New Grade Data",
            'students' => Student::all(),
            'departments' => Department::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
        ]);

        $grade = Grade::create([
            'name' => $validated['name'],
            'department_id' => $validated['department_id'],
        ]);

        return redirect('/admin/grades')->with('success', 'Grade created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $grade = Grade::findOrFail($id);

        $students = Student::all();

        return view('admin.grade.edit', [
            'title' => 'Edit Grade Data',
            'grade' => $grade,
            'departments' => $departments,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
        ]);

        $grade = Grade::findOrFail($id);

        $grade->update([
            'name' => $validated['name'],
            'department_id' => $validated['department_id'],
        ]);

        return redirect('/admin/grades')->with('success', 'Grade updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $grade = Grade::findOrFail($id);

        $grade->delete();

        return redirect('/admin/grades')->with('success', 'Grade deleted successfully.');

    }
}
