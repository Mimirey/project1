<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\StudentsController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/profil',[ProfilController::class,'profil']);
Route::get('/kontak',[KontakController::class,'kontak',]);

Route::get('/home',[HomeController::class,'index'] );

Route::get('/students',[StudentsController::class,'index']);
