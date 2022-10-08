<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function loginValidate(LoginRequest $request)
    {
        if (Auth::attempt(['email' => request('email'), 'password' => $request->password], $request->remember)) {
            return redirect('/')->with('success-info', 'Login Successfully');
        }

        return redirect('/login')->with('error', 'Invalid Credential');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success-info', 'Logout Successfully');;
    }
}
