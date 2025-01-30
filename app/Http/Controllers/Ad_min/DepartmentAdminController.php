<?php

namespace App\Http\Controllers\Ad_min;

use App\Models\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentAdminController extends Controller
{
    public function index()
    {
        return view('admin.department.index', [
            'title' => 'Department Admin',
            'departments' => Department::all()
        ]);
    }
}
