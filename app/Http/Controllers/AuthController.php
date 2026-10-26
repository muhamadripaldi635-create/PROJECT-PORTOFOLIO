<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Show login form.
     */
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('admin.projects.index');
        }

        return view('auth.login');
    }

    /**
     * Handle login submission.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->intended(route('admin.projects.index'))
                ->with('success', 'Selamat datang kembali, ' . Auth::user()->name . '!');
        }

        throw ValidationException::withMessages([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ]);
    }

    /**
     * Handle logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')
            ->with('success', 'Anda telah berhasil keluar (logout).');
    }
}
