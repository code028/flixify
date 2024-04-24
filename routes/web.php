<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
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

    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/service', [PageController::class, 'service'])->name('page.service');
    Route::get('/contact', [PageController::class, 'contact'])->name('page.contact');
    Route::get('/about', [PageController::class, 'about'])->name('page.about');
    Route::get('/user/{id}', [ProfileController::class, 'index'])->name('profile');
    Route::get('/user/{id}/settings', [ProfileController::class, 'settings'])->name('settings');
    Route::middleware('role:admin')->group(function () {
        // Route::get('/admin/dashboard', [PageController::class, 'admin'])->name('dashboard');
        Route::get('/admin/dashboard', function(){
            return view('admin.dashboard');
        })->name('dashboard');
    });

    Route::post('/user/theme', [ProfileController::class, 'theme'])->name('theme');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
