<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class AuthController extends Controller
{
    public function dashboard()
    {
        if (Auth::check() === true) {

            return view('admin.dashboard');
        }

        return Redirect()->route('admin.login');
    }

    public function showLoginForm()
    {
        return view('admin.formLogin');

    }

    public function login(HttpRequest $request)
    {
        var_dump($request->all());

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return Redirect()->route('admin');
        }
        return Redirect()->back()->withErrors(['Os dados não conferem! ']);

    }

    public function logout()
    {
        Auth::logout();
        return Redirect()->route('admin');
    }

    public function home()
    {
        return View('register');
    }

}
