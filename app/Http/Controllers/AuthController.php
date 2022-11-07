<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
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

    public function register(Request $request)
    {
        // $array = ['error' => ''];
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users,email',
        //     'cpf' => 'required|digits:11|unique:users,cpf',
        //     'password' => 'required',
        //     'password_confirm' => 'required|same:password',

        // ]);

    }

}
