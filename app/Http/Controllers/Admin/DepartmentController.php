<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use App\Models\Student;
use App\Models\Grade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::with('student')->latest()->get();

        return view('admin.department.index2', compact('departments'), [
            'title' => "Departments",
            'departments' => $departments

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.department.create', [
            "title" => "Create New Department Data",
            'students' => Student::all(),
            'grades' => Grade::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirimkan
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'desc'  => 'required',
        ]);

        // Simpan data student ke dalam tabel students
        $student = Student::create([
            'name' => $validated['name'],
            'desc' => $validated['desc'],
        ]);

        // Redirect atau response sukses
        return redirect('/admin/departments')->with('success', 'Student created successfully.');
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
        $departments = Department::findOrFail($id);

        // Ambil data grades untuk pilihan pada form
        $grades = Grade::all();

        // Tampilkan halaman edit dengan data siswa dan grades
        return view('admin.department.edit', [
            'title' => 'Edit Department Data',
            'department' => $departments,
            'grades' => $grades
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang dikirimkan
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'desc'  => 'required',
        ]);

        // Cari data siswa berdasarkan ID
        $student = Student::findOrFail($id);

        // Update data siswa
        $student->update([
            'name'     => $validated['name'],
            'desc' => $validated['desc'],
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect('/admin/departments')->with('success', 'Department updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }

}
