<?php

namespace App\Http\Controllers\Auht;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerForm() {
        return view('pages.auth.register');
    }

    public function register(RegisterRequest $request) {

        $request->validated();

        $file = $request->file('image');
        $path = $file->store('users', 'public');
        $finalpath = 'storage' . $path;

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "role" => $request->role,
            "image" => $finalpath,
            "password" => Hash::make($request->password)
        ]);

        return redirect()->back()->with('success', 'compte créé');

    }
}
