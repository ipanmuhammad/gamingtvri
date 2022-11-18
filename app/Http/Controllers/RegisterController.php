<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'

        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|max:255|unique:users',
            'password' => 'required|min:8|max:255',
            'password_confirmation' => 'same:password'

        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);


        User::create($validatedData);

        return redirect('/login')->with('success', 'berhasil daftar');
    }
}