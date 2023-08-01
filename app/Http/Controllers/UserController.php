<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function showProfile(){
        $users = Auth::user();
        return view('user.profilo',['users'=>$users]);
    }
}
