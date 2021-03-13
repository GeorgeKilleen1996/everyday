<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navController extends Controller
{
    public function home()
    {
    	return view('home');
    }
    
    public function signupform()
    {
    	return view('signupform');
    }
}
