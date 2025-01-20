<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\GradeController;
use App\Http\Controllers\DepartmentController;

use App\Http\Controllers\Ad_min\DepartmentAdminController;
use App\Http\Controllers\Ad_min\GradeAdminController;
use App\Http\Controllers\Ad_min\StudentAdminController;

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

Route::prefix('grades')->group(function () {
    Route::get('/', [GradeController::class, 'index']);
    Route::get('/{grade}', [GradeController::class, 'show']);
});

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::prefix('grades')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\GradeController::class, 'index']);
        Route::get('/create', [\App\Http\Controllers\Admin\GradeController::class, 'create']);
        Route::post('/store', [\App\Http\Controllers\Admin\GradeController::class, 'store']);
        Route::get('/edit/{grade}', [\App\Http\Controllers\Admin\GradeController::class, 'edit']);
        Route::put('/update/{grade}', [\App\Http\Controllers\Admin\GradeController::class, 'update']);
        Route::delete('/delete/{grade}', [\App\Http\Controllers\Admin\GradeController::class, 'destroy']);
    });
});

Route::prefix('departments')->group(function () {
    Route::get('/', [DepartmentController::class, 'index']);
    Route::get('/{department}', [DepartmentController::class, 'show']);
});

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::prefix('departments')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\DepartmentController::class, 'index']);
        Route::get('/create', [\App\Http\Controllers\Admin\DepartmentController::class, 'create']);
        Route::post('/store', [\App\Http\Controllers\Admin\DepartmentController::class, 'store']);
        Route::get('/edit/{department}', [\App\Http\Controllers\Admin\DepartmentController::class, 'edit']);
        Route::put('/update/{department}', [\App\Http\Controllers\Admin\DepartmentController::class, 'update']);
        Route::delete('/delete/{department}', [\App\Http\Controllers\Admin\DepartmentController::class, 'destroy']);
    });
});
