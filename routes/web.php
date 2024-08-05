<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

Route::get('/',function(){
    return view('layout.main');
});

Route::get('/student',[HomeController::class,'Student']);
Route::get('/attendance',[HomeController::class,'Attendance']);
Route::get('/show',[HomeController::class,'Show']);


Route::post('/add',[StudentController::class,'student_add'])->name('student_add');
// Route::get('edit/{id}',[StudentController::class,'showdata']);

Route::view('login','auth.login')->name('auth.login');
