<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    function masuk()
    {
    	return view('login.form_login');
    }
}
