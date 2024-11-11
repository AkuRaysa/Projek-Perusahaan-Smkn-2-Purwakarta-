<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function index()
    {
        return view ('user.registrasi');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|max:255',
        //     'username' => ['required', 'min:4', 'max:255', 'unique:users'],
        //     'email' => 'require|email|unique:users',
        //     'password' => 'required|min:8|max:255'
        // ]);
    }
}