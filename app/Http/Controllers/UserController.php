<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  protected $fillable = ["name", "country_id", "email", "password", "gender", "dob"];

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function __invoke()
  {
    $user = Auth::user();
    $user = $user->load('country');
    return view('profile.index', compact('user'));
  }
}
