<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function authenticate(LoginRequest $loginRequest)
    {
        $validatedData = $loginRequest->validated();
        if (Auth::attempt($validatedData)) {
            $loginRequest->session()->regenerate();
            return redirect()->intended('auth/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
