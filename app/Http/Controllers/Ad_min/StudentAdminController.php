<?php

namespace App\Http\Controllers\Ad_min;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentAdminController extends Controller
{
    public function index()
    {
        $student = Student::with(['grade','department'])->get();

        return view('admin.student.index', [
            'title' => 'Student Admin',
            'students' => $student,
        ]);
    }
}
