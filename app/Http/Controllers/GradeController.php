<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

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
