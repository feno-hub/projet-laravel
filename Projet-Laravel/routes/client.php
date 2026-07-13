<?php

use App\Http\Controllers\Client\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('client/account', [ClientController::class, 'index'])
    ->middleware("auth")
    ->name('client.account');

