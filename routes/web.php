<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function() {
    Route::get('teacher/', [TeacherController::class, 'index'])->name('teacher.index');
    Route::post('teacher/', [TeacherController::class, 'store'])->name('teacher.store');
    Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
    

    Route::get('student/', [StudentController::class, 'index'])->name('student.index');
});
