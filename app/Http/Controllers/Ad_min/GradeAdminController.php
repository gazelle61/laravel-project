<?php

namespace App\Http\Controllers\Ad_min;

use App\Models\Grade;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GradeAdminController extends Controller
{
    public function index()
    {
        return view('admin.grade.index', [
            'title' => 'Grade Admin',
            'grades' => Grade::all()
        ]);
    }
}
