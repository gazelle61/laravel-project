<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentAdminController;
use App\Http\Controllers\GradeAdminController;
use App\Http\Controllers\DepartmentAdminController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/grades', [GradeController::class, 'index']);

Route::get('/departments', [DepartmentController::class, 'index']);

Route::get('/student-admin', [StudentAdminController::class, 'index']);

Route::get('/grade-admin', [GradeAdminController::class, 'index']);

Route::get('/department-admin', [DepartmentAdminController::class, 'index']);

Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index']);
    Route::get('/{student}', [StudentController::class, 'show']);
});

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::prefix('students')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\StudentController::class, 'index']);
        Route::get('/create', [\App\Http\Controllers\Admin\StudentController::class, 'create']);
        Route::post('/store', [\App\Http\Controllers\Admin\StudentController::class, 'store']);
        Route::get('/edit/{student}', [\App\Http\Controllers\Admin\StudentController::class, 'edit']);
        Route::put('/update/{student}', [\App\Http\Controllers\Admin\StudentController::class, 'update']);
        Route::delete('/delete/{student}', [\App\Http\Controllers\Admin\StudentController::class, 'destroy']);
    });
});
