<?php

use App\Http\Controllers\Auht\LoginController;
use App\Http\Controllers\Auht\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/connexion', [LoginController::class, 'loginForm'])
    ->name('loginForm');

Route::post('/connexion', [LoginController::class, 'login'])
    ->name('login');

Route::get('/inscription', [RegisterController::class, 'registerForm'])
    ->name('registerForm');

Route::post('/inscription', [RegisterController::class, 'register'])
    ->name('register');    