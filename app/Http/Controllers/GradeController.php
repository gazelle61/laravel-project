<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GradeController extends Controller
{
    public function index()
    {
        $grade = Grade::all();

        return view('grades', [
            'title' => 'Grade',
            'grades' => $grade->load('students', 'department')
        ]);
    }
}
