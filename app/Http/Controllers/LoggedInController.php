<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pokemoncard;

use Illuminate\Support\Facades\Auth;

class LoggedInController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function home()
    {
    	return view('members_home');
    }

    public function planner()
    {
    	return view('members_planner');
    }

    public function finances()
    {
    	return view('members_finances');
    }

    public function portfolio()
    {
    	return view('members_portfolio');
    }

    public function health()
    {
    	return view('members_health');
    }

    public function pokemon()
    {
        $id = Auth::user()->id;
        $pokemoncards = Pokemoncard::all()->where('userid', '=', $id);
    	return view('members_pokemon',compact('pokemoncards'));
    }
}
