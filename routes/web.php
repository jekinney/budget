<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login', [AuthController::class, 'attempt'])->name('login.attempt');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');

// Authenticated route
Route::middleware('auth')->group( function() {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


});
