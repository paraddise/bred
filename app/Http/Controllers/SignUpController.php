<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function create()
    {
        return view('auth.signup');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required_with:password_confirmation|string|max:255|confirmed',
            'password_confirmation' => 'required'
        ]);

        unset($validatedData['password_confirmation']);
        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create($validatedData)->save();
        return (json_encode($validatedData));
    }


}
