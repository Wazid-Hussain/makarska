<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;


class SessionController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/dashboard');
        }

        throw ValidationException::withMessages([
            'email' => 'Login Details Not Matched'
        ]);
    }

    public function destroy()
    {
        auth()->logout();
        
        return redirect('/');
    }
}
