<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function simpanuser(Request $request)
    {
        $user = User::create([
            'name'=> $request->nama,
            'email'=> $request->email,
            'password'=>bcrypt($request->password)
        ]);

        return redirect('/');
    }

    public function ceklogin(Request $request)
    {
        Auth::attempt([
        'email' => $request->email, 
        'password' => $request->password
    ]);

    return redirect('/dashboard');
    }
}
