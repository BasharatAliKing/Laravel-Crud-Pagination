<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/',[userController::class,'allStudents'])->name('home');
Route::post('/add',[userController::class,'add'])->name('addstudent');
Route::get('/viewstudent/{id}',[userController::class,'viewStudent'])->name('viewstudent');
Route::get('/delete/{id}',[userController::class,'deleteStudent'])->name('delete');
Route::get('/update/{id}',[userController::class,'update'])->name('update');
Route::post('/updateStudent/{id}',[userController::class,'updateStudent'])->name('updatestudent');
Route::view('addstudent','/addStudent');