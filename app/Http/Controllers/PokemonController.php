<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pokemoncard;

use Illuminate\Support\Facades\Auth;


class PokemonController extends Controller
{
    public function addcard(Request $request)
    {
   		$pokemoncard = new Pokemoncard;
   		$pokemoncard->userid = Auth::user()->id;
   		$pokemoncard->number = $request->number;
   		$pokemoncard->language = $request->language;
   		$pokemoncard->year_released = $request->year_released;
   		$pokemoncard->set_name = $request->set_name;
   		$pokemoncard->card_name = $request->card_name;
   		$pokemoncard->bought_for = $request->bought_for;

   		$pokemoncard->save();
    	return redirect()->back()->with('success','card has been  updated successfully!');

   		//dd($pokemoncard);
    }

}
