<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('loginForm');
});

require __DIR__."/auth.php";