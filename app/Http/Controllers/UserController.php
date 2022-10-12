<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $fillable = ["name", "country_id", "email", "password", "gender", "dob"];
}
