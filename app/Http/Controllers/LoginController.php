<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function connecter()
    {

        return view('auth.connecter');
    }

    public function register()
    {
        return view('auth.register');
    }
}
