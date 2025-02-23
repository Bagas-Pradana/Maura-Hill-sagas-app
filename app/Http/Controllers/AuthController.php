<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function loginIndex()
    {
        return view("auth.login");
    }

    public function loginStore(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email tidak valid.',
            'password.required' => 'Password harus diisi.',
        ]);

        // Coba melakukan autentikasi
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect ke halaman setelah login berhasil
            return redirect()->intended('dashboard');
        }

        // Jika autentikasi gagal, kembali ke halaman login dengan message error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}