<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function signin(Request $request)
    {
    	$request->validate([

    		'email' => 'required',
    		'password' => 'required'

    		]);

    	if(Auth::attempt([

    		'email' => $request->email,
    		'password' => $request->password

    		]))
    	{
    		return redirect()->intended(route('home'));
    	}
    	return redirect()->back()->with('danger', 'Login details are incorrect!');
    }

    public function login()
    {
    	return view('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }

}
