<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

Route::get('/', [ProfilController::class, 'index']);
Route::get('/profil',[ProfilController::class,'profil']);
Route::get('/kontak',[ProfilController::class,'kontak',]);

Route::get('/home', function () {
    return view('home',[
        'title' => "Homee",
    ]); 
});
