<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index()
    {
        $users= User::where('role','user')->get();
        return view('user.index',compact('users'));
    }
}
