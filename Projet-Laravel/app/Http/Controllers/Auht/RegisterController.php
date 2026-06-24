<?php

namespace App\Http\Controllers\Auht;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerForm() {
        return view('pages.auth.register');
    }
}
