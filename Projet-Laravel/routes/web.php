<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('loginForm');
});

Route::get('/acceuil', [HomeController::class, 'home'])
    ->name('home.index');

require __DIR__."/auth.php";
require __DIR__."/client.php";