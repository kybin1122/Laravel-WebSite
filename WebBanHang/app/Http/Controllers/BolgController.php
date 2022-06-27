<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BolgController extends Controller
{
    public function bolg_page()
    {
        return view('pages.bolg');
    } 
}