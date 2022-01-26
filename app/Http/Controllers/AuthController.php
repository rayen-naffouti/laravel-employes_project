<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' =>Hash::make($request->input('password')),
            'role' => $request->input('role'),
            'img' => $request->input('img')
        ]);
    }


    public function user()
    {
        return 'Authenticated user';
    }
}
