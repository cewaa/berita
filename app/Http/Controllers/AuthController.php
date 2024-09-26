<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Tampilkan form login
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba login
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard')->with('success', 'Selamat datang!');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout()
    {
        Auth::logout(); // Logout pengguna
        return redirect('/login')->with('success', 'Anda telah logout.');
    }
}
