<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BolgSingleController extends Controller
{
    public function bolgSingle_page()
    {
        return view('pages.bolgSingle');
    } 
}