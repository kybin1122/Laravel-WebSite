<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login_page()
    {
        return view('pages.admin_login');
    } 
}
