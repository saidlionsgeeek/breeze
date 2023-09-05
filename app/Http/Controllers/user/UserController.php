<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function reset(Request $request, User $user){

        $user->update([
            'password' => $request->password,
            'usertype' => 'user'
        ]);

        return redirect()->route("dashboard");
    }

    public function index(){
        
        return view("reset_password");
    }
}
