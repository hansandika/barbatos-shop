<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        // Store the user...
        $attr = $request->all();
        $attr['password'] = bcrypt($request->password);
        $attr['country_id'] = $request->country;
        User::create($attr);
        return redirect('/login')->with('success-info', 'Register Successfully');
    }
}
