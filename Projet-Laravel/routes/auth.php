<?php

use App\Http\Controllers\Auht\LoginController;
use App\Http\Controllers\Auht\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'loginForm'])
    ->name('loginForm');

Route::get('/register', [RegisterController::class, 'registerForm'])
    ->name('registerForm');