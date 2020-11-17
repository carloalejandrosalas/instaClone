<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //
    public function index($username) 
    {   
        $user = User::findOrFail($username);

        return view('profiles.index', compact('user'));
    }
}
