<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function signup(Request $request) {
        $validatedData = $request->validate([
            "name" => "required|min:3",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:4"
        ]);

        $validatedData["password"] = bcrypt($validatedData["password"]);

        $user = User::create($validatedData);
        auth()->login($user);

        session()->flash('success', 'Se ha creado tu cuenta');

        return redirect('/');
    }

    public function login(Request $request) {
        $validatedData = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (!auth()->attempt($validatedData)) {
            return back()
                ->withInput()
                ->withErrors(['email' => 'Email o contraseña incorrectos']);
        }

        return redirect('/')->with('success', 'Has accedido con éxito');
    }

    public function logout() {
        auth()->logout();
        return redirect('/')->with('success', 'Has salido de tu cuenta');
    }

    public function signup_form() {
        return view('signup-form');
    }

    public function login_form() {
        return view('login-form');
    }
}
