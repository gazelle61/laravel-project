<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentAdminController extends Controller
{
    public function index()
    {
        return view('department-admin', [
            'title' => 'Department Admin',
            'departments' => Department::all()
        ]);
    }
}
