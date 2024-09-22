<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'student'],function(){

Route::get('/all', [StudentController::class, 'index'])->name('student.index');
Route::get('/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/{student_id}', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/{student_id}', [StudentController::class, 'update'])->name('student.update');
Route::get('/delete/{student_id}', [StudentController::class, 'delete'])->name('student.delete');
});
