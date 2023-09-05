<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function store(Request $request){
        request()->validate([
            "name"=>"required",
            "email"=>"email|required",
        ]);

        $exist = User::where("email", $request->email)->first();
        if (!$exist) {
            User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>"testtest",
            "usertype"=>"unvirified",
        ]);
            return redirect()->back();
        }else{
            return redirect()->back();
        }
        
        
    }
}
