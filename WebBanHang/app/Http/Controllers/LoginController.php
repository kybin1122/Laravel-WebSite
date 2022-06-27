<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login1_page()
    {
        return view('pages.login');
    } 
}