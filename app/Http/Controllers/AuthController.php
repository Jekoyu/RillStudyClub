<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Auth(Request $r)
    {
        $cr = $r->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->attempt($cr)) {
            return redirect()->intended('/');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
}
