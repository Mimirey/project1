<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/profil',[ProfilController::class,'profil']);
Route::get('/kontak',[KontakController::class,'kontak',]);

Route::get('/home',[HomeController::class,'index'] );

Route::get('/students',[StudentsController::class,'index']);
Route::get('/guardians',[GuardianController::class,'index']);
Route::get('/classrooms',[ClassroomController::class,'index']);
Route::get('/teachers',[TeacherController::class,'index']);
Route::get('/subjects',[SubjectController::class,'index']);