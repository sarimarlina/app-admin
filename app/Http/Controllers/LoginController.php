<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }
    public function masuk(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->is_admin == 1) {
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/pegawai');
            }
        } else {
            return back()->with('loginError', 'Login Gagal!');
        }
    }
}
