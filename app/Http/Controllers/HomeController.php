<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id()){
            $user = Auth::id();
            $usertype = Auth()->user()->usertype;
            $userpassword = Auth()->user()->password;
            if ($usertype == "admin") {
                return view("home");
            }elseif ($usertype == "user") {
                
                return view("dashboard");
            }else if ($usertype == "unverified") {
                return view("reset_password", compact('user'));
            }else{
                return redirect()->back();
            }
        }
    }
    
}

