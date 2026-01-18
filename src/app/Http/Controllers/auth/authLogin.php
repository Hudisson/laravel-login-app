<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authLogin extends Controller
{
    public function login()
    {
        return view('auth/login');
    }
}
