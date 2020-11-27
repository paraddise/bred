<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function create(Request $request)
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $creds = $request->only('email', 'password');
        if (Auth::attempt($creds)) {
            return redirect()->intended();
        } else {
            return back()->with('error', 'Email or password is wrong');
        }
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->intended(route('login'));
    }
}
