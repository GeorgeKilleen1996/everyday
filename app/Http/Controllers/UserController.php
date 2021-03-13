<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUser;
use App\Http\Requests\CheckUser;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    public function saveUser(CreateUser $request)
    {

    	$user = new User;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->isAdmin = false;
        $user->save();
        return redirect()->back()->with('success','User has been  added successfully!');
    }

}
