<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\loginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
       public function loginForm()
    {

        if(Auth::user() !== null) {
            return redirect('client/account');
        }

        return view('pages.auth.login');
    }

    public function login(loginRequest $request)
    {
        $crendentials = $request->validated();

        if (Auth::attempt($crendentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role == 'client') {
                return redirect()->intended('client/account');
            } elseif (Auth::user()->role == 'vendeur') {
                dd('vendeur');
            } elseif (Auth::user()->role == 'livreur') {
                dd('livreur');
            } elseif (Auth::user()->role == 'admin') {
                dd('admin');
            }
        }

        return back()->withErrors([
            'email' => 'email invalide !!!',
        ])->onlyInput('email');
    }
}
