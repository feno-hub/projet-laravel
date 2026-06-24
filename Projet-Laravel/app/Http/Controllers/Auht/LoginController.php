<?php

namespace App\Http\Controllers\Auht;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function loginForm() {
        return view('pages.auth.login');
    }
}
