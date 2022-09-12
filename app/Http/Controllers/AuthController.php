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

        User::create($validatedData);

        session()->flash('success', 'Se ha creado tu cuenta');

        return redirect('/');
    }

    public function login(Request $request) {

    }

    public function logout(Request $request) {

    }

    public function signup_form() {
        return view('signup-form');
    }

    public function login_form() {
        return view('login-form');
    }
}
