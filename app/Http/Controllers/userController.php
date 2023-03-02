<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    function login(Request $req){
        $userData= User::where(['email'=>$req->email])->first(); // we take particular data that matches our email
        if(!$userData || !Hash::check($req->password,$userData->password)){
            return "username and password is invalid...";
        }else{
            $req->session()->put('user',$userData);
            return redirect("/product");
        }
    }
}
