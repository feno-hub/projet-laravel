<?php

namespace App\Http\Controllers\Auht;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\loginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('pages.auth.login');
    }

    public function login(loginRequest $request)
    {
        $crendentials = $request->validated();

        if (Auth::attempt($crendentials)) {
            $request->session()->regenerate();

            return redirect()->back();
            // return redirect()->intended('inscription');
        }

        return back()->withErrors([
            'email' => 'email invalide !!!',
        ])->onlyInput('email');
    }
}
