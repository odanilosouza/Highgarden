<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard()
    {
        if (Auth::check() === true) {
            return view(view:'admin.dashboard');
        }
        return redirect()->route(route:'admin.login');
    }

    public function showLoginForm()
    {
        return view(view:'admin.formLogin');

    }

    public function login(Request $request)
    {
        var_dump($request->all());

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,

        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route(route:'admin');
        }

        return redirect()->back()->withInput()->withErrors(['Os dados informados não conferem!']);

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route(route:'admin');
    }
}
