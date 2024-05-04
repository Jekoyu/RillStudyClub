<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function Auth(Request $r)
    {
        $cr = $r->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $auth = Auth::attempt($cr);
        if ($auth) {
            Session::put('is_admin', 'is_admin');
            return redirect()->intended('/dashboard');
        } else {
            
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
    public function logout(Request $r)
    {
        $r->session()->flush();
        return redirect('/');
    }

    public function showLogin()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        } else {
            return view('login');
        }
    }
}
