<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('guest')->group(function () {
Route::get('/login', [LoginController::class,'index'])->name('auth.login');
Route::post('/login', [LoginController::class,'login'])->name('login');
Route::get('/register', [RegisterController::class,'index'])->name('auth.register');
Route::post('/register', [RegisterController::class,'register'])->name('register');
});

/* Only logged in users can access these */
Route::middleware('auth')->group(function () {
    
    Route::get('/', [HomeController::class, 'index'])->name('index');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});