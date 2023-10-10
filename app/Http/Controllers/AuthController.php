<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'NIM' => ['required', 'numeric'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role == 'mahasiswa') {
                return redirect()->intended('/Dashboard');
            } else if (Auth::user()->role == 'admin') {
                return redirect()->intended('/kelolaPengajuanTA');
            }
        }

        return back()->withErrors([
            'NIM' => 'The provided credentials do not match our records.',
        ])->onlyInput('NIM');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/');
    }
}
